<?php $data_penyakit = $diagnosapenyakit->tampilpenyakit(); ?>
<?php $data_gejala = $gejala->tampilgejala(); ?>

<h4>Tambah Rule</h4>
<div class="container">

	<form method="post">
		<div class="form-group">
			<label>Parent</label>
			<select class="form-control" name="id_gejala_parent">
				<option value="">Pilih</option>
				<option value="0">Tanpa Parent</option>
				<?php foreach ($data_gejala as $key => $value): ?>
					<option value="<?php echo $value['id_gejala'] ?>"><?php echo $value['nama_gejala']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>Pertanyaan</label>
			<select class="form-control" name="id_gejala_pertanyaan">
				<option value="">Pilih</option>
				<?php foreach ($data_gejala as $key => $value): ?>
					<option value="<?php echo $value['id_gejala'] ?>"><?php echo $value['nama_gejala']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>jika Ya, maka muncul pertanyaan selanjutnya</label>
			<select class="form-control" name="id_gejala_ya">
				<option value="">Pilih</option>
				<?php foreach ($data_gejala as $key => $value): ?>
					<option value="<?php echo $value['id_gejala'] ?>"><?php echo $value['nama_gejala']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>Jika Tidak, maka muncul pertanyaan selanjutnya</label>
			<select class="form-control" name="id_gejala_tidak">
				<option value="">Pilih</option>
				<?php foreach ($data_gejala as $key => $value): ?>
					<option value="<?php echo $value['id_gejala'] ?>"><?php echo $value['nama_gejala']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label>Penyakit</label>
			<select class="form-control" name="id_penyakit">
				<option value="">Pilih</option>
				<?php foreach ($data_penyakit as $key => $value): ?>
					<option value="<?php echo $value['id_penyakit'] ?>"><?php echo $value['nama_penyakit']; ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<button class="btn btn-primary" type ="submit" name="simpan">Simpan</button>
		
	</form>
	
</div>

<?php 
if (isset($_POST['simpan'])) 
{

	$simpan = $rule->tambahrule($_POST['id_gejala_parent'],$_POST['id_gejala_pertanyaan'],
		$_POST['id_gejala_ya'],$_POST['id_gejala_tidak'],$_POST['id_penyakit']);
	if ($simpan=='sukses') 
	{
		echo "<script>alert('Data Rule Tersimpan!');</script>";
		echo "<script>location='index.php?halaman=rule';</script>";
	}
}
 ?>