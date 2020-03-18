<h2>DATA GEJALA</h2>


<?php 
$datagejala = $gejala->tampilgejala();

 ?>
<!--  <pre>`-->
  <!-- <?php //print_r($datagejala);?>  -->
 <!-- </pre>  -->
<div class="table-responsive">
	<table class="table table-bordered" id='datatables'>
  <thead class="">
    <tr>
      <th scope="col">No</th>
      <!-- <th scope="col">Kode</th> -->
      <th scope="col">Gejala</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($datagejala as $key => $value):?> 

  	  <tr>
      <th scope="row"> <?php echo $key+1; ?></th>
     
      <td><?php echo  $value['nama_gejala']?></td>
      <td>
      	<a class="btn btn-primary" href="index.php?halaman=ubahgejala&id=<?php echo $value ['id_gejala'] ?>">Ubah</a>
      	<a class="btn btn-danger" href="index.php?halaman=hapusgejala&id=<?php echo $value ['id_gejala'] ?>">Hapus</a>
      </td>

    </tr>
  	<?php endforeach?>



  </tbody>
</table>
</div>
<a class="btn btn-primary" href="index.php?halaman=tambahgejala">TAMBAH++</a> 
