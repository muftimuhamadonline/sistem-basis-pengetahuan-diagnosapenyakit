

<?php 

$id = $_GET['id'];
$pasien->hapuspasien($id);
echo "<script>location='index.php?halaman=pasien';</script>";
echo "<script>alert('Data Berhasil dihapus');</script>";
 ?>