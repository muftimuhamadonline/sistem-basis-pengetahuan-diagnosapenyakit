<?php include 'config/class.php'; ?>
<?php $ambildata = $konsultasi->tampilkonsultasi($_SESSION['pasien']['id_pasien']); ?>
<!-- <pre><?php print_r($ambildata) ?></pre> -->

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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

			<div class="col-sm-9 card" style="padding-top: 10px;">
				<h4 class="">Riwayat Konsultasi</h4>
				<table class="table table-sm" id="tabelku">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Diagnosa</th>
							<th scope="col">Detail</th>

						</tr>
					</thead>
					<tbody>
							
							<?php foreach ($ambildata as $key => $value): ?>	
						<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['tgl_konsultasi']; ?></td>
								<td>
									<?php 
									$datadetailkonsultasi = $konsultasi->ambildetailkonsultasi($value['id_konsultasi']);
									$hasilhitung = $rule->hitungpenyakit($datadetailkonsultasi);
									if ($hasilhitung=='kosong') 
									{
										echo "-";
									}
									else
									{
										foreach ($hasilhitung['hasil'] as $key_diagnosa => $value_diagnosa) 
										{
											echo $value_diagnosa['nama_penyakit']." (".$value_diagnosa['persen']."% )";
											break;
										}
									}
									?>
								</td>
								<td>
									<a href="hasilkonsultasi.php?id=<?php echo $value['id_konsultasi'] ?>" class="btn btn-primary">Detail</a>
								</td>
						</tr>
							<?php endforeach ?>
					</tbody>
				</table>
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#tabelku').DataTable(
				
				);
		} );
	</script>

</body>

</html>