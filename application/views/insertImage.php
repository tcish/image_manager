<?php require_once "inc/header.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 offset-sm-2 offset-md-3 offset-lg-3 mt-5">
      <form method="post" enctype="multipart/form-data">
      <div>
        <label for="path">Folder Name: </label>
        <input type="text" name="path" id="path" class="form-control" placeholder="Enter Folder Name">
      </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="image">Image: </label>
          <input type="file" name="image" id="image" class="form-control border-0" />
          <span class="text-danger font-weight-bold"><?php if (isset($file)) {echo $file;} ?></span>
        </div>
        <button class="btn btn-success">Submit</button>
        <a href="<?= base_url() ?>Image/" class="btn btn-warning">Go Back</a>
      </form>
    </div>
  </div>
</div>
<?php require_once "inc/footer.php"; ?>