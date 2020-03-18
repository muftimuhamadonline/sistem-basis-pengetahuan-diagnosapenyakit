<?php 
// include '../../config/class.php';

$id = $_GET['id'];

$hapus = $gejala->hapusgejala($id);

if ($hapus==true) 
{
echo "<script>alert('Data Berhasil Dihapus!')</script>";
echo "<script>location='index.php?halaman=gejala'</script>";
	# code...
}
else
{
echo "<script>alert('Data gagal dihapus,karena sudah digunakan! ')</script>";
echo "<script>location='index.php?halaman=gejala'</script>";

}

 ?>