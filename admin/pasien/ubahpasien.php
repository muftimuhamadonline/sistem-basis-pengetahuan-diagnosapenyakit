<?php $id = $_GET['id']; ?>
<?php $ambilpasien = $pasien->ambilpasien($id); ?>
<pre>
	<?php print_r($ambilpasien); ?>
</pre>
<div class="container">

	<h4>Ubah Pasien</h4>
	<form method="post">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $ambilpasien['nama_pasien'] ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="alamat"><?php echo $ambilpasien['alamat_pasien'] ?></textarea>
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input type="text" class="form-control" name="tlp" value="<?php echo $ambilpasien['tlp_pasien'] ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl" value="<?php echo $ambilpasien['tanggal_lahir'] ?>">
		</div>
		<div class="form-group">
			<label>Kelamin</label>
			<select name ="kelamin" class="form-control" value="<?php echo $ambildata['jenis_kelamin_pasien'] ?>">
				<option value="laki-laki">laki-laki</option>
				<option value="perempuan">perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $ambilpasien['email_pasien'] ?>">
		</div>

		<button class="btn btn-primary" type ="submit" name="ubah">Ubah</button>
		
	</form>
	
</div>

<?php 
if (isset($_POST['ubah'])) 
{
	$ubah = $pasien->ubahpasien($_POST['nama'],$_POST['alamat'],$_POST['tlp'],$_POST['tgl'],$_POST['kelamin'],$_POST['email'],$id);
	if ($ubah == 'sukses') 
	{
		echo "<script>alert('Data Berhasil Dirubah');</script>";
		echo "<script>location='index.php?halaman=pasien'</script>";	
	}
	else
	{
		echo "<script>alert('Data gagal Dirubah');</script>";
	}
}
?>