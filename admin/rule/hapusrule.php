<?php $id = $_GET['id'] ?>
<?php $hapusrule = $rule->hapusrule($id); ?>

<?php 
if ($hapusrule==true) 
{
	echo "<script>alert('Data Berhasil Dihapus!')</script>";
	echo "<script>location='index.php?halaman=rule'</script>";
}
else
{
	echo "<script>alert('Data gagal dihapus!')</script>";
	echo "<script>location='index.php?halaman=rule'</script>";
}

?>