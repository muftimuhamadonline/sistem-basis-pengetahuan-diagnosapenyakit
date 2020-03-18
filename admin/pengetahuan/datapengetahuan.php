DATA PENGETAHUAN

<?php 
$datapengetahuan = $pengetahuan->tampilpengetahuan();

 ?>
<div class="table-responsive">
	<table class="table table-bordered" id= 'datatables'>
  <thead class="">
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID PENYAKIT</th>
      <th scope="col">ID GEJALA</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datapengetahuan as $key => $value):?> 

  	  <tr>
      <th scope="row"> <?php echo $key+1; ?></th>
      <td><?php echo  $value['nama_penyakit']?></td>
      <td><?php echo  $value['nama_gejala']?></td>
            <td>
      	<a class="btn btn-primary" href="index.php?halaman=ubahpengetahuan&id=<?php echo $value['id_pengetahuan'] ?>">Ubah</a>
      	<a class="btn btn-danger" href="index.php?halaman=hapuspengetahuan&id=<?php echo $value['id_pengetahuan']; ?>">Hapus</a>
      </td>

    </tr>
  	<?php endforeach?>



  </tbody>  
</table>
</div>
<a class="btn btn-primary" href="index.php?halaman=tambahpengetahuan">TAMBAH++</a> 
