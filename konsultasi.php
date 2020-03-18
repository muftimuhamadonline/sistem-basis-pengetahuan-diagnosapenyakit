<?php include 'config/class.php'; ?>
<?php 
if (!isset($_SESSION['pasien'])) 
{
	echo "<script>location='login.php'</script>";
}
?>
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
	<div class="container-fluid" style="padding-top: 50px; margin-bottom: 50px; ">
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

			<div class="col-sm-9 card">
				<?php 
				$rule->pertanyaanpertama();
				$pertanyaan = end($_SESSION['konsultasi']);
				$ambilgejala = $gejala->ambilgejala($pertanyaan['id_gejala_pertanyaan']);
				?>
				<br>
				<h4>Jawablah pertanyaan dibawah ini sesuai dengan gejala yang anda rasakan</h4>
				<br>
				<form method="post">
					
					<p class="lead">Apakah anda mengalami <?php echo $ambilgejala['nama_gejala']  ?>?</p>
					<div class="row" style="margin-bottom: 10px;">
						<button value="ya" name="jawaban" class="btn btn-outline-primary col-md-2" style="margin-left: 10px; margin-right: 10px;">Ya</button>
						<button value='tidak' name="jawaban" class="btn btn-outline-danger col-md-2" style="margin-right: 450px;">Tidak</button>
						<button class="btn btn-warning col-md-2" name="reset">Reset Pertanyaan</button>
					</div>
				</form>

				<?php 
				if (isset($_POST['jawaban']))
				{
					$hasil = $rule->kelolajawaban($pertanyaan,$_POST['jawaban']);
					if ($hasil=='lanjut') 
					{
						echo "<script>location='konsultasi.php'</script>";	
					}
					else
					{
						$idkonsultasi = $konsultasi->tambahkonsultasi($_SESSION['pasien']['id_pasien'], date("Y-m-d"), $_SESSION['jawaban']);
						echo "<script>location='hasilkonsultasi.php?id=$idkonsultasi';</script>";
					}
				}
				elseif(isset($_POST['reset'])) 
				{
					unset($_SESSION['konsultasi']);
					unset($_SESSION['jawaban']);
					echo "<script>location='konsultasi.php';</script>";
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