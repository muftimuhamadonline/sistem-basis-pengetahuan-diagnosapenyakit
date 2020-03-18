<?php 

include '../../config/class.php';
$id =$_GET['id'];
$diagnosapenyakit->hapuspenyakit($id);


echo "<script>alert('data dihapus')</script>";
echo "<script>location='../index.php?halaman=penyakit'</script>";
 ?>
