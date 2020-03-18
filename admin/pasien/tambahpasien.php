<h2>Tambah Pasien</h2>	
<div class="container">

	<form method="post">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>
		<div class="form-group">
			<label>Telepon</label>
			<input type="text" class="form-control" name="tlp">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl">
		</div>
		<div class="form-group">
			<label>Kelamin</label>
			<select name ="kelamin" class="form-control">
				<option value="laki-laki">laki-laki</option>
				<option value="perempuan">perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="pass">
		</div>
		
		<button class="btn btn-primary" type ="submit" name="simpan">Simpan</button>
	</form>
	
</div>

<?php 

if (isset($_POST['simpan'])) 
{
	$simpan = $pasien->tambahpasien($_POST['nama'],$_POST['alamat'],$_POST['tlp'],$_POST['tgl'],$_POST['kelamin'],$_POST['email'],$_POST['pass']);
	if ($simpan == 'sukses') 
	{
		echo "<script>alert('Data tersimpan');</script>";
		echo "<script>location='index.php?halaman=pasien';</script>";
	}
	else
	{
		echo "<script>alert('Gagal tersimpan');</script>";
		echo "<script>location='tambahpasien.php';</script>";

	}

}

?>
