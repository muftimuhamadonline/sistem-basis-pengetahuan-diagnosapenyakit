<?php include 'config/class.php'; ?>
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
	<?php include 'navbar.php';?>
	<div class="container-fluid" style="padding-top: 50px;">
		<div class="row">
			<div class="list col-md-3">
				<div class="list-group">
					<a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
					<a href="ubahpassword.php" class="list-group-item list-group-item-action">Ubah Password</a>
					<a href="konsultasi.php" class="list-group-item list-group-item-action">Konsultasi</a>
					<a href="riwayatkonsultasi.php" class="list-group-item list-group-item-action">Riwayat Konsultasi</a>
					<a href="logout.php" class="list-group-item list-group-item-action">Keluar</a>
				</div>
			</div>	

			<div class="col-sm-9 card" style="margin-bottom: 50px;">
				<br>
				<h4>Ubah Password</h4>
				<form method="post">
					<div class="form-group">
						<label>Password lama</label>
						<input type="password" class="form-control" name="pass_lama">
					</div><div class="form-group">
						<label>Password baru</label>
						<input type="password" class="form-control" name="pass_baru">
					</div>
					<div class="form-group">
						<label>Konfirmasi password baru</label>
						<input type="password" class="form-control" name="pass_konf">
					</div>
					
					<button class="btn btn-primary" type ="submit" name="simpan" style="margin-bottom: 10px;">Simpan</button>

				</form>
				<br>
				<?php 
				if (isset($_POST['simpan'])) 
				{
					if ($_POST['pass_lama']==$_SESSION['pasien']['password_pasien'])
					{
						if ($_POST['pass_baru']==$_POST['pass_konf']) 
						{
				 			$pasien->ubahpassword($_POST['pass_baru'],$_SESSION['pasien']['id_pasien']);
				 			echo "<div class='alert alert-info'>Ubah Password Berhasil</div>";
						}
						else
						{
				 			echo "<div class='alert alert-danger'>Ubah Password Gagal</div>";

						}
					}
					else
					{
						echo "<div class='alert alert-danger'>Password Lama Salah</div>";
					}
				} 
				?>
			</div>


		</div>

	</div>
<!-- 	<div class="articel">
		articel
	</div> -->
	<?php include'footer.php'; ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>