<?php $id = $_GET["id"]; ?>
<?php $ambilgejala = $gejala->ambilgejala($id); ?>
<pre> <?php print_r($ambilgejala); ?> </pre>

<div class="container">
	<h2>Ubah Gejala</h2>

	<form method="post">
		<div class="form-group">
			<label>Nama Gejala</label>
			<input type="text" class="form-control" name="gejala" value= "<?php echo $ambilgejala['nama_gejala']; ?>">
		</div>
		
		<button class="btn btn-primary" name="ubah">Ubah</button>
	</form>
	
</div>

<?php 

if (isset($_POST['ubah'])) 
{
	$ubah = $gejala->ubahgejala($_POST['gejala'],$id);
	if ($ubah == "sukses") 
	{
		echo "<script>alert('Data berhasil dirubah')</script>";
		echo "<script>location='index.php?halaman=gejala'</script>";

	}
	else
	{
		echo "<script>alert('Data gagal dirubah')</script>";

	}
}
?>