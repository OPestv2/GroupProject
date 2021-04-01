<?php require APPROOT . '/views/inc/header.php'; ?>

<main>
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 fw-normal"><?php echo 'Mamy już: ' . $data['numberOfMultimedia'] . ' multimediów!!!'; ?></h1>
			<p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
			<a class="btn btn-outline-secondary" href="#">Coming soon</a>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>

	<?php for ($i=0; $i<$data['numberOfMultimedia']/2; ++$i): ?>
	<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
		<div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
			<div class="my-3 py-3">
				<h2 class="display-5">Okienko id: <?php echo $i*2; ?></h2>
				<p class="lead">And an even wittier subheading.</p>
			</div>
			<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
		</div>
		<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
			<div class="my-3 p-3">
				<h2 class="display-5">Okienko id: <?php echo $i*2+1; ?></h2>
				<p class="lead">And an even wittier subheading.</p>
			</div>
			<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
		</div>
	</div>
	<?php endfor; ?>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>