<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<link rel="stylesheet" href="<?=base_url('assets/css/halaman/notfound.css')?>"></link>
<link rel="stylesheet" href="<?=base_url('assets/bootstrap-4.4.1-dist/css/bootstrap.min.css')?>"></link>
</head>
<body>

	<div class="container pt-5">

		<div class="row text-center justify-content-center p-4">

			<h2 class="prussian font-roboto"><?= $heading ?></h2>

		</div>

		<div class="row text-center justify-content-center p-4">

			<img src="<?= base_url('assets/Resource/notfound.svg')?>" alt="gambar-404">

		</div>

		<div class="row text-center justify-content-center p-4">

			<h4 class="message"><?= $message ?></h4>

		</div>

		<div class="row text-center justify-content-center p-4">

			<?= anchor('beranda','GO TO HOME',['class'=>'btn btn-danger prussian-bg']); ?>

		</div>

	</div>

</body>
</html>