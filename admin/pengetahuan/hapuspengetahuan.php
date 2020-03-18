<?php $id = $_GET['id']; ?>
<?php $pengetahuan->hapuspengetahuan($id); ?>

<?php 

echo "<script>alert('Data Berhasil Dihapus!')</script>";
echo "<script>location='index.php?halaman=pengetahuan'</script>";
// if ($hapuspengetahuan==true) 
// {
// 	echo "<script>alert('Data Berhasil Dihapus!')</script>";
// 	echo "<script>location='index.php?halaman=pengetahuan'</script>";
// }
// else
// {
// 	echo "<script>alert('ERROR, Data Gagal Dihapus!')</script>";

// }

 ?>