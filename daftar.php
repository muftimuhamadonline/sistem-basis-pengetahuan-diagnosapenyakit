<?php include 'config/class.php' ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Sistem Diagnosa!</title>
</head>
<body>
	<!-- <h1>Hello, world!</h1> -->
	<?php include 'navbar.php'; ?>
	<div class="container">
		<div class="row justify-content-md-center mt-5">
			<div class="col-md-6">
				<div class="jumbotron">
					<h1 class="display-4">Daftar</h1>
					<p class="lead"> Isi data diri dengan benar</p>
					<hr class="my-4">
					<form method="post">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="Nama" required="" pattern="[a-zA-Z ].{1,}">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
						</div>
						<div class="form-group">
							<label>Telepone</label>
							<input type="text" name="tlp" class="form-control" placeholder="tlp" required="" pattern="[0-9+].{10,15}">
						</div>
						<div class="form-group">
							<label>Tanggal lahir</label>
							<input type="date" name="ttl" class="form-control" placeholder="TTL" required="">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select  class="form-control" name="jk" required="">
								<option>Jenis Kelamin</option>
								<option value="Laki - laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Email Adddres</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
						</div>
						<button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
					</form>
					<br>
					<?php
					if (isset($_POST['daftar'])) {
						$hasil = $pasien->tambahpasien($_POST['nama'],$_POST['alamat'],$_POST['tlp'],$_POST['ttl'],$_POST['jk'],$_POST['email'] , $_POST['password']);
						if ($hasil=='sukses') {
							echo "<script>alert('Anda berhasil terdaftar, silahkan login!');</script>";
							echo "<script>location='login.php'</script>";
						}
						else
						{
							echo "<div class='alert alert-danger'>Email sudah digunakan</div>";
						}
					} 
					?>
				</div>
			</div>
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