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
				<?php $datadetailkonsultasi = $konsultasi->ambildetailkonsultasi($_GET['id']);?>
				<?php $datahitung = $rule->hitungpenyakit($datadetailkonsultasi); ?>
				<p>Berdasarkan gejala yang dipilih yaitu :</p>
				<ul>
					<?php foreach ($datadetailkonsultasi as $key => $value): ?>
						<?php $detailgejala = $gejala->ambilgejala($value['id_gejala']) ?>
						<li><?php echo $detailgejala['nama_gejala']; ?></li>
					<?php endforeach ?>
				</ul>
				<?php if ($datahitung=='kosong'): ?>
					Penyakit Tidak ditemukan
				<?php else: ?>
					<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
						<?php if ($value['persen']>0): ?>
							<?php $data_pengetahuan = $pengetahuan->tampilpengetahuanpenyakit($id_penyakit) ?>
							<p>Pengetahuan Penyakit <?php echo $value['nama_penyakit']; ?></p>
							<ul>
								<?php foreach ($data_pengetahuan as $key_pengetahuan => $value_pengetahuan): ?>
									<li><?php echo $value_pengetahuan['nama_gejala']; ?></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
					<?php endforeach ?>
					<p>Hasil diagnosa penyakit anda adalah : </p>
					<ul>
						<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
							<?php if ($value['persen']>0): ?>
								
								<li>
									<?php echo $value['keterangan']. "menderita ". $value['nama_penyakit']. " dengan persentase : " . $value['persen'] . "%"; ?>
									
								</li>	
							<?php endif ?>
						<?php endforeach ?>
					</ul>
					<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
						<p><b>Deskripsi :</b></p>
						<p><?php echo $value['deskripsi_penyakit']; ?></p>
						<p><b>Saran :</b></p>
						<p><?php echo $value['saran_penyakit']; ?></p> 
						<?php break; ?>
					<?php endforeach ?>
				<?php endif ?>
				
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