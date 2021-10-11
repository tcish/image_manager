<?php
  class image_model extends CI_Model{
    public function insertImage(){
      if ($this->input->post("path") == "") {
        $fName = "img/";
      }else {
        $fName = "img/".$this->input->post("path")."/";
        if (!file_exists($fName)) {
          mkdir($fName, 0777, true);
        }
      }

      $file = array(
        "upload_path" => $fName,
				"allowed_types" => "jpeg|jpg|png",
				"max_size" => "4000",
				'encrypt_name' => TRUE,
				"file_ext_tolower" => TRUE
			);
      $this->load->library('upload', $file);

      if(!$this->upload->do_upload("image")) {
        $data["file"] = $this->upload->display_errors();
        $this->load->view("insertImage", $data);
      }else {
        $fileData = $this->upload->data();
        $fileName = $fName.$fileData["raw_name"].$fileData["file_ext"];
  
        $userData = array(
          "image" => $fileName,
        );
        $this->db->insert("images", $userData);
        redirect('Image/view');
      }
    }

    public function fetchImage(){
      $get_images = $this->db->get('images');
      return $get_images->result_array();
    }

    public function insertProfile($id, $profileId){
      $this->db->where('id', $profileId)->delete('pro_pic');

      $userData = array(
        "pro_id" => $id,
      );

      $this->db->insert("pro_pic", $userData);
      redirect('Image/');
    }

    public function delProfileImg($id){
      $this->db->where('id', $id)->delete('pro_pic');

      redirect("Image/");
    }

    public function getProfile(){
      $proImage = $this->db->select("*")->from("images")->join("pro_pic", "images.id = pro_pic.pro_id")->order_by("pro_pic.id", "desc")->limit("1")->get();
      return $proImage->result_array();
    }

    public function insertProductImg($id, $productId){
      $this->db->where('id', $productId)->delete('product_img');

      $userData = array(
        "img_id" => $id,
      );

      $this->db->insert("product_img", $userData);
      redirect('Image/');
    }

    public function delProductImg($id){
      $this->db->where('id', $id)->delete('product_img');

      redirect("Image/");
    }

    public function getProduct(){
      $proImage = $this->db->select("*")->from("images")->join("product_img", "images.id = product_img.img_id")->order_by("product_img.id", "desc")->limit("1")->get();
      return $proImage->result_array();
    }

    public function delMainImg($id){
      $this->fetchImgForDel($id);
      
      $this->db->where('id', $id)->delete('images');
      $this->db->where('pro_id', $id)->delete('pro_pic');
      $this->db->where('img_id', $id)->delete('product_img');
      
      redirect("Image/view");
    }

    public function fetchImgForDel($id) {
      $getImg =$this->db->select("*")->from("images")->where("id", $id)->get();
      $getarr = $getImg->result_array();
      foreach ($getarr as $key ) {
        $img = $key["image"];
        // $base = "../".$img;
        unlink($img);
      }
    }
  }
?>