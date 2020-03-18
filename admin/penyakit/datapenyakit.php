<h2>DATA PENYAKIT</h2>

<?php 
$datapenyakit = $diagnosapenyakit->tampilpenyakit();

 ?>

<div class="table-responsive">
	<table class="table" id= 'datatables'>
  <thead class="">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Penyakit</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Saran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datapenyakit as $key => $value):?> 

  	  <tr>
      <th scope="row"> <?php echo $key+1; ?></th>
      <td><?php echo  $value['kd_penyakit']?></td>
      <td><?php echo  $value['nama_penyakit']?></td>
      <td><?php echo  $value['deskripsi_penyakit']?></td>
      <td><?php echo  $value['saran_penyakit']?></td>
      <td>
      	<a class="btn btn-primary" href="index.php?halaman=ubahpenyakit&id=<?php echo $value['id_penyakit'] ?>">Ubah</a>
      	<a class="btn btn-danger" href="penyakit/hapuspenyakit.php?id=<?php echo $value['id_penyakit']; ?>">Hapus</a>
      </td>

    </tr>
  	<?php endforeach?>



  </tbody>  
</table>
</div>
<a class="btn btn-primary" href="index.php?halaman=tambahpenyakit">TAMBAH++</a> 
