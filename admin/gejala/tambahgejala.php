
<div class="container">
	<h2>TAMBAH GEJALA</h2>

	<form method="post">
		<div class="form-group">
			<label>Nama Gejala</label>
			<input type="text" class="form-control" name="gejala">
		</div>
		
	<button class="btn btn-primary" name="simpan">Simpan</button>
	</form>
	
</div>
<?php 

if (isset($_POST['simpan'])) 
{
	$simpan = $gejala->tambahgejala($_POST['gejala']);
	if ($simpan == 'sukses') 
	{
		echo "<script>alert('Data tersimpan');</script>";
		echo "<script>location='index.php?halaman=gejala';</script>";
	}
	else
	{
		echo "<script>alert('Gagal tersimpan');</script>";
		echo "<script>location='tambahgejala.php';</script>";

	}

}

?>



