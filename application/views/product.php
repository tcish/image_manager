<?php
  require_once "inc/header.php";

  $productId = "";
  foreach ($productImage as $product) {
    echo $productId = $product["id"];
  }
?>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 offset-sm-2 offset-md-3 offset-lg-3 mt-5">

    <div class="modal fade" id="proAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Your Photos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form action="" method="POST">
                  <div class="modal-body">
                      <div class="form-group">
                      <?php
                      if ($allImage) {
                        echo "<h6>Click on a photo to add as a profile</h6>";
                        foreach ($allImage as $img) {
                          echo "<a href='".base_url()."Image/insert_product_img/".$img["id"]."/".$productId."' class='profile__img'><img src='".base_url()."".$img['image']."'></a>";
                        }
                      }else { ?>
                        <h6>No Image Added yet!</h6>
			                  <a href="<?= base_url() ?>Image/insert" class="btn btn-info mt-1">Add Image</a>  
                <?php } ?>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
    
      <form method="post" enctype="multipart/form-data">
        <div>
          <label for="">Select Existing Image: </label><br>
          <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#proAdd">Click Here</button>
        </div>
        <a href="<?= base_url() ?>Image/" class="btn btn-warning">Go Back</a>
      </form>
    </div>
  </div>
</div>
<?php require_once "inc/footer.php"; ?>