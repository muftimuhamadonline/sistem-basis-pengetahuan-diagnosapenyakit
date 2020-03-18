
	<div class="container">
		<h2>Tambah Penyakit</h2>

		<form method="post" >
			<div class="form-group">
				<label>Nama Penyakit</label>
				<input type="text" class="form-control" name="nama">
			</di
			<div class="form-group">
				<label>Deskripsi Penyakit</label>
				<textarea class="form-control" name="deskripsi"></textarea>
			</div>
			<div class="form-group">
				<label>Saran</label>
				<textarea class="form-control" name="saran"></textarea>
			</div>
		<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
		</form>
		
		
	</div>

	<?php 

			if (isset($_POST['simpan'])) 
				{
					
					$simpan = $diagnosapenyakit->tambahpenyakit($_POST['nama'] , $_POST['deskripsi'] , $_POST['saran']);
					if ($simpan == "sukses") 
					{
						echo "<script>alert('Data Tersimpan')</script>";
						echo "<script>location='index.php?halaman=penyakit'</script>";
					}
				}
				
		 ?>



