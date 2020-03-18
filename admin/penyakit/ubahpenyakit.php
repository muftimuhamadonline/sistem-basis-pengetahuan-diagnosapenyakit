<?php $id = $_GET["id"]; ?>
<?php $ambildata = $diagnosapenyakit->ambildata($id); ?>				

<div class="container">

	<h4>Ubah Penyakit</h4>
	<form method="post">
		<div class="form-group">
			<label>Nama Penyakit</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $ambildata['nama_penyakit'] ?>">
		</div>
		<div class="form-group">
			<label>Deskripsi Penyakit</label>
			<textarea class="form-control" name="deskripsi"><?php echo $ambildata['deskripsi_penyakit'] ?></textarea>
		</div>
		<div class="form-group">
			<label>Saran</label>
			<textarea class="form-control" name="saran"><?php echo $ambildata['saran_penyakit']; ?></textarea>
		</div>
		<button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
	</form>
	
</div>


<?php 
if (isset($_POST['ubah'])) 
{
	$ubah = $diagnosapenyakit->ubahpenyakit($_POST['nama'] , $_POST['deskripsi'] , $_POST['saran'], $id);
	if ($ubah == "sukses") 
	{
		echo "<script>alert('Data berhasil dirubah')</script>";
		echo "<script>location='index.php?halaman=penyakit'</script>";
	}
	else
	{
		echo "<script>alert('Data gagal dirubah')</script>";

	}
}
?>