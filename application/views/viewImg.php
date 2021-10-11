<?php require_once "inc/header.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <a href="<?= base_url() ?>Image/" class="btn btn-info float-right ml-3 mt-5">Go Back</a>
      <a href="<?= base_url() ?>Image/insert" class="btn btn-info float-right mt-5">Add Image</a>
      </div>
      
      <div class="col-12">
        <table class="table table-bordered table-responsive-sm mt-4 text-center">
          <tr>
            <th>NO</th>
            <th>Image</th>
            <th>Action</th>
          </tr>

          <?php
            if ($allImage) {
              $i = 1;
              foreach ($allImage as $img) { ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><img src='../<?= $img["image"] ?>' width='150px'></td>
                  <td><a href="<?= base_url() ?>Image/delImg/<?= $img["id"] ?>" class="btn btn-danger">Delete</a></td>
                </tr>
          <?php }
              } else {
                echo "<td colspan='3'><h4>No Image Add Yet!</h4></td>";
              }
            ?>
        </table>
      </div>
	</div>
</div>
<?php require_once "inc/footer.php"; ?>
