<h3>Ubah pengetahuan</h3>

<?php $data_penyakit = $diagnosapenyakit->tampilpenyakit()?>
<?php $datagejala = $gejala->tampilgejala() ?>
<?php $id = $_GET['id'] ?>
<?php $datapengetahuan = $pengetahuan->ambilpengetahuan($id) ?>
<form method="post">
	<div class="form-group">
		<label>Nama Penyakit</label>
		<select class="form-control"  name="id_penyakit">
			<option value="">Pilih penyakit</option>
			<?php foreach ($data_penyakit as $key => $value): ?>
				<option value="<?php echo $value["id_penyakit"] ?>" 
					<?php if ($datapengetahuan['id_penyakit'] == $value['id_penyakit']) {
						echo "selected";
					} ?>>
					<?php echo $value['nama_penyakit']; ?>
				</option>
			<?php endforeach ?>
		</select>

	</div>
	<div class="form-group">
		<label> GEJALA</label>
		<select class="form-control" name="id_gejala">
			<option value=""> Pilih gejala</option>
			<?php foreach ($datagejala as $key => $value): ?>
				<option value="<?php echo $value['id_gejala'] ?>"
					<?php if ($datapengetahuan["id_gejala"] == $value['id_gejala']) {
						echo "selected";
					}  ?>>
					<?php echo $value['nama_gejala']; ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>
	<button class="btn btn-primary sm" type="submit" name="ubah">Ubah</button>
</form>

<?php 
if (isset($_POST['ubah'])) 
{
	$ubah = $pengetahuan->ubahpengetahuan($_POST['id_penyakit'],$_POST['id_gejala'],$id);
	if ($ubah=='sukses') 
	{
		echo "<script>alert('Data Berhasil Dirubah');</script>";
		echo "<script>location='index.php?halaman=pengetahuan';</script>";
	}
	else
	{
		echo "<script>alert('Data Gagal Dirubah!');</script>";
	}
}

?>