<h2>Profile</h2>

<form method="post">
  <div class="form-group">
    <label>Nama Admin</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['admin']['nama_admin'] ?>">
  </div>
  <div class="form-group">
    <label>Telepon Admin</label>
    <input type="text" class="form-control" name="tlp" value="<?php echo $_SESSION['admin']['tlp_admin'] ?>">
  </div>
  <div class="form-group">
    <label>Alamat Admin</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $_SESSION['admin']['alamat_admin'] ?>">
  </div>
  <div class="form-group">
    <label>Email Admin</label>
    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['admin']['email_admin'] ?>">
  </div>
  <button class="btn btn-primary" type="submit" name='ubah'>Ubah</button>
</form>

<?php 
if (isset($_POST['ubah'])) {
  $admin->ubahprofile($_POST['nama'],$_POST['tlp'],$_POST['alamat'],$_POST['email'], $_SESSION['admin']['id_admin']);
  echo "<script>alert('Brhasil dirubah!');</script>";
  echo "<script>location='index.php';</script>";
}
 ?>