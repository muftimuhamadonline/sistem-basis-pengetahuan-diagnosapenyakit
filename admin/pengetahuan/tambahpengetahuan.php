

<div class="container">
	<h2>Tambah pengetahuan</h2>

	<form method="post">
		<div class="form-group">
			<label>Nama Penyakit</label>
			<select class="form-control" name="id_penyakit">
				<option>Pilih Penyakit</option>
				<?php $data_penyakit = $diagnosapenyakit->tampilpenyakit() ?>
				<?php foreach ($data_penyakit as $key => $value): ?>
					<option value="<?php echo $value['id_penyakit'] ?>"><?php echo $value['nama_penyakit'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>GEJALA</label>
			<br>
			<?php $datagejala = $gejala->tampilgejala(); ?>
			<?php foreach ($datagejala as $key => $value): ?>
				<input type="checkbox" name="id_gejala[<?php echo $value['id_gejala'] ?>]">
				<?php echo $value['nama_gejala']; ?>
				<br>
			<?php endforeach ?>
		</div>

		<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
	</form>
</div>

<?php 

if (isset($_POST['simpan'])) 
{

	$simpan = $pengetahuan->tambahpengetahuan($_POST['id_penyakit'], $_POST['id_gejala']);
	if ($simpan == "sukses") 
	{
		echo "<script>alert('Data Tersimpan')</script>";
		echo "<script>location='index.php?halaman=pengetahuan'</script>";
	}
}

?>

