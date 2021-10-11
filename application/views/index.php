<?php require_once "inc/header.php"; ?>
<div class="container bg-light h-auto">
	<div class="row">
		<div class="col-12 mb-5">
			<a href="<?= base_url() ?>Image/insert" class="btn btn-info float-right ml-3 mt-5">Add Image</a>
			<a href="<?= base_url() ?>Image/view" class="btn btn-info float-right mt-5">View All Images</a>
		</div>

			<div class="col-12 col-md-6">
			<?php
				foreach ($proImage as $img ) { ?>
					<img src="<?= base_url() ?><?= $img["image"] ?>" width="350px" height="350px" style='object-fit: cover; border-radius: 50%;'><br>
	<?php } 
			if ($proImage) { ?>
				<a href="<?= base_url() ?>Image/addPro" class="btn btn-dark mt-3 mb-3" style="margin-left: 3rem;">Update profile Image</a>
				<a href="<?= base_url() ?>Image/delProfileImg/<?= $img["id"] ?>" class='btn btn-danger'>Delete</a>
		<?php }else { ?>
				<a href="<?= base_url() ?>Image/addPro" class="btn btn-dark mt-3 mb-3" style="margin-left: 6rem;">Add profile Image</a>
		<?php } ?>
			</div>

			<div class="col-12 col-md-6 mb-4">
				<?php
				if ($productImage) { ?>
					<div class="card" style="width: 18rem;">
	<?php foreach ($productImage as $img ) { ?>
					<img src="<?= base_url() ?><?= $img["image"] ?>" class="card-img-top"><br>
	<?php } ?>
						<div class="card-body">
							<h5 class="card-title text-center">Product Name</h5>
							<p class="card-text text-center">Product Price</p>
							<a href="#" class="btn btn-primary btn-block">Buy Now</a>
						</div>
					</div>
					<a href="<?= base_url() ?>Image/ProductImg" class="btn btn-dark mt-3" style="margin-left: 1rem;">Update Product Image</a>
					<a href="<?= base_url() ?>Image/delProductImg/<?= $img["id"] ?>" class='btn btn-danger mt-3'>Delete</a>
	<?php }else { ?>
					<a href="<?= base_url() ?>Image/ProductImg" class="btn btn-dark mt-3" style="margin-left: 4rem;">Add Product Image</a>
	<?php } ?>
			</div>
	</div>
</div>
<?php require_once "inc/footer.php"; ?>