<?php
  class Image extends CI_Controller {
    public function index(){
      $data["proImage"] = $this->image_model->getProfile();
      $data["productImage"] = $this->image_model->getProduct();
      $this->load->view('index', $data);
    }

    public function insert(){
      $this->image_model->insertImage();
    }
    
    public function view(){
      $data["allImage"] = $this->image_model->fetchImage();
      $this->load->view('viewImg', $data);
    }

    public function delImg($id){
      $this->image_model->delMainImg($id);
    }

    public function addPro(){
      $data["allImage"] = $this->image_model->fetchImage();
      $data["proImage"] = $this->image_model->getProfile();

      $this->load->view('profile', $data);

    }
    
    public function insert_pro($id, $profileId = ""){
      $data["pro_id"]= $id;

      $this->image_model->insertProfile($id, $profileId);
    }

    public function delProfileImg($id){
      $this->image_model->delProfileImg($id);
    }

    public function ProductImg(){
      $data["allImage"] = $this->image_model->fetchImage();
      $data["productImage"] = $this->image_model->getProduct();

      $this->load->view('product', $data);
    }
    
    public function insert_product_img($id, $productId = ""){
      $this->image_model->insertProductImg($id, $productId);
    }

    public function delProductImg($id){
      $this->image_model->delProductImg($id);
    }
  }
?>