<?php $datapenyakit = $diagnosapenyakit->tampilpenyakit(); ?>
<?php $data_gejala = $gejala->tampilgejala(); ?>
<?php $id = $_GET['id']; ?>
<?php $ambilrule = $rule->ambilrule($id); ?>

<pre>
	<?php 
	print_r($ambilrule);
	?>		
</pre>


<h4>Ubah Rule</h4>
<form method="post">
	<div class="form-group">
		<label>Parent</label>
		<select class="form-control" name="id_gejala_parent">
			<option value="">Pilih</option>
			<option value="0" <?php if($ambilrule['id_gejala_parent']=="0"){echo "selected";} ?>>Tanpa Parent</option>
			<?php foreach ($data_gejala as $key => $value): ?>
				<option value="<?php echo $value['id_gejala'] ?>"<?php if ($value['id_gejala']==$ambilrule['id_gejala_parent']) {echo "selected";} {
					# code...
				} ?>><?php echo $value['nama_gejala']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Pertanyaan</label>
		<select class="form-control" name="id_gejala_pertanyaan">
			<option value="">Pilih</option>
			<?php foreach ($data_gejala as $key => $value): ?>
				<option value="<?php echo $value['id_gejala'] ?>" <?php if($value['id_gejala']==$ambilrule['id_gejala_pertanyaan']) {echo "selected";} ?>><?php echo $value['nama_gejala']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>jika Ya, maka muncul pertanyaan selanjutnya</label>
		<select class="form-control" name="id_gejala_ya">
			<option value="">Pilih</option>
			<?php foreach ($data_gejala as $key => $value): ?>
				<option value="<?php echo $value['id_gejala'] ?>" <?php if($value['id_gejala']==$ambilrule['id_gejala_ya']){echo "selected";} ?>><?php echo $value['nama_gejala']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Jika Tidak, maka muncul pertanyaan selanjutnya</label>
		<select class="form-control" name="id_gejala_tidak">
			<option value="">Pilih</option>
			<?php foreach ($data_gejala as $key => $value): ?>
				<option value="<?php echo $value['id_gejala'] ?>" <?php if($value['id_gejala']==$ambilrule['id_gejala_tidak']) {echo "selected";} ?>><?php echo $value['nama_gejala']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Penyakit</label>
		<select class="form-control" name="id_penyakit">
			<option value="">Pilih</option>
			<?php foreach ($datapenyakit as $key => $value): ?>
				<option value="<?php echo $value['id_penyakit'] ?>" <?php if($value['id_penyakit']==$ambilrule['id_penyakit']) {echo "selected";} ?>><?php echo $value['nama_penyakit']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<button class="btn btn-primary" type ="submit" name="ubah">Ubah</button>

</form>

<?php 
if (isset($_POST['ubah'])) 
{
	$ubah = $rule->ubahrule($_POST['id_gejala_parent'],$_POST['id_gejala_pertanyaan'],$_POST['id_gejala_ya'],$_POST['id_gejala_tidak'],$_POST['id_penyakit'],$id);
	if ($ubah=='sukses') 
	{
		echo "<script>alert('Data Berhasil Dirubah');</script>";
		echo "<script>location='index.php?halaman=rule';</script>";
	}
	else
	{
		echo "<script>alert('Data Gagal Dirubah!');</script>";
	}
}
?>