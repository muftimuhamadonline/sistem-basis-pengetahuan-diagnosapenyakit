<?php include 'config/class.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sistem Diagnosa!</title>
</head>
<body>
	<!-- <h1>Hello, world!</h1> -->
	<?php include 'navbar.php'; ?>
	<div class="header">
		<div class="jumbotron">
			<div  style="background-color: white; border-radius: 50px;  ">		
			<h1 class="" style="text-align: center; color: orange; font-size: 70px; ">SELAMAT DATANG!</h1>
			<p class="" style="text-align: center;">Kenali Penyakit Kulit Anda Sejak Dini.</p>
			<hr class="my-4">
			</div>
		
			<!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
		</div>
	</div>
	<div class="about">
		<div class="container">
			<div> <h5 class="display-4">Tentang Sistem</h5></div>
			<p class="lead">Metode yang digunakan dalam sistem berbasis pengetahuan ini adalah Forward Chaining atau runut maju. Forward Chaining kadang disebut data-driven karena engine menggunakan informasi yang ditentukan oleh user untuk memindahkan keseluruh jaringan dari logika AND dan OR sampai sebuah terminal ditentukan sebagai objek. Bila interfence engine tidak dapat menentukan objek maka akan meminta informasi lain. Aturan dimana menentukan objek membentuk lintasan ke objek oleh karena itu hanya satu cara untuk mencapai satu objek dengan memenuhi semua aturan.
			Dalam sistem pakar ini user akan menginputkan gejala sesuai yang user alami. Pertanyaan yang diajukan kepada user sesuai aturan yang telah dibuat, Setelah user menginputkan gejala maka akan muncul hasil diagnosa sesuai aturan yang ada dalam sistem. Hasil diagnosa berupa penyakit, solusi penanganan pertama sesuai pada hasil diagnosa penyakit, sehingga diharapkan dapat membantu user agar lebih mudah mendapatkan informasi.</p>
			<p class="lead">	Pada Sistem Berbasis Pengetahuan ini dapat mendiagnosa penyakit Moluskum Kontagiosum, Rubella, Veruka Vulgaris, Herpes Zozter</p>
		</div>
	</div>

	<?php include 'footer.php'; ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>