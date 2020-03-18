<?php 
$tampilpasien = $pasien->tampilpasien();

?>
<!-- <pre>
	<?php 
	// print_r($tampilpasien);
	?>
</pre> -->
<h4>Data User</h4>
<br>
<br>
<div class="table-responsive">
	<table class="table" id='datatables'>
		<thead class="">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Telepon</th>
				<th scope="col">TTL</th>
				<th scope="col">Kelamin</th>
				<th scope="col">Email</th>
				<th scope="col">Aksi</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($tampilpasien as $key => $value):?> 

				<tr>
					<th scope="row"> <?php echo $key+1; ?></th>
					<td><?php echo  $value['nama_pasien']?></td>
					<td><?php echo  $value['alamat_pasien']?></td>
					<td><?php echo  $value['tlp_pasien']?></td>
					<td><?php echo  $value['tanggal_lahir']?></td>
					<td><?php echo  $value['jenis_kelamin_pasien']?></td>
					<td><?php echo  $value['email_pasien']?></td>
					<td>
						<a class="btn btn-warning btn-sm" href="index.php?halaman=ubahpasien&id=<?php echo $value['id_pasien'] ?>">Ubah</a>
						<a class="btn btn-danger btn-sm" href="index.php?halaman=hapuspasien&id=<?php echo $value['id_pasien']?>">Hapus</a>
					</td>

				</tr>
			<?php endforeach?>



		</tbody>
	</table>
</div>
<a class="btn btn-primary" href="index.php?halaman=tambahpasien">TAMBAH++</a> 
