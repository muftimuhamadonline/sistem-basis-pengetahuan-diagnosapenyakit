
<?php $datarule = $rule->tampilrule(); ?>
<h3>Data Rule</h3>
<br>
<br>
<div class="table-responsive">
	<table class="table table-bordered"  id="datatables">
		<thead>
			<tr>
				
				<th>No</th>
				<th>Parent</th>
				<th>Pertanyaan</th>
				<th>Ya</th>
				<th>Tidak</th>
				<th>Penyakit</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datarule as $key => $value): ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td>
						<?php
						if ($value['id_gejala_parent']==0) {
						 	echo "0";
						 } 
						 else {
						 	$data_parent = $gejala->ambilgejala($value['id_gejala_parent']);
						  	echo $data_parent['nama_gejala'];
						  } 
						 ?>
					</td>
					<td>
						<?php 
						if ($value['id_gejala_pertanyaan']==0) {
							echo "0";
						}
						else
						{	$data_pertanyaan = $gejala->ambilgejala($value['id_gejala_pertanyaan']);
							echo $data_pertanyaan['nama_gejala'];
						}
						 ?>
					</td>
					<td>
						<?php 
						if ($value['id_gejala_ya']==0) {
						 echo "0";
						 }
						  else
						 {	
						 	$data_ya = $gejala->ambilgejala($value['id_gejala_ya']);
						 	echo $data_ya['nama_gejala'];
						 }
						 ?>
					</td>
					<td>
						<?php 
						if ($value['id_gejala_tidak']==0) {
						 echo "Tidak Ada Gejala";
						 }
						  else
						 {	
						 	$data_tidak = $gejala->ambilgejala($value['id_gejala_tidak']);
						 	echo $data_tidak['nama_gejala'];
						 }
						 ?>
					</td>
					<td>
						<?php 
						if ($value['id_penyakit']==0) {
						 echo "Tidak Terdefinisi";
						 }
						  else
						 {	
						 	$data_penyakit = $diagnosapenyakit->ambildata($value['id_penyakit']);
						 	echo $data_penyakit['nama_penyakit'];
						 }
						 ?>
					</td>
					<td>
						<a href="index.php?halaman=ubahrule&id=<?php echo $value['id_rule'] ?>" class="btn btn-warning  btn-sm">Ubah</a>
						<a href="index.php?halaman=hapusrule&id=<?php echo $value['id_rule'] ?>" class="btn btn-danger  btn-sm">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
<a class="btn btn-primary" href="index.php?halaman=tambahrule">Tambah</a>
	
</div>