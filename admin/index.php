  <?php 
  include '../config/class.php';

  if (!isset($_SESSION['admin'])) {
    echo "<script>location='login.php';</script>";
  }
  ?>
  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    <title>Mufti</title>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <a class="navbar-brand" href="#" style="color: white; text-align: center;"><h4>Admin</h4></a>
                   
           <a class="navbar-" href="index.php?" style="color: white; text-align: center;">Dashboard</a>
      
            <a class="navbar" href="index.php?halaman=penyakit" style="color: white; text-align: center;">Data Penyakit</a>
            <a class="navbar" href="index.php?halaman=gejala" style="color: white; text-align: center;">Data Gejala</a>
            <a class="navbar" href="index.php?halaman=konsultasi" style="color: white; text-align: center;">Data Konsultasi</a>
            <a class="navbar" href="index.php?halaman=pengetahuan" style="color: white; text-align: center;">Data Pengetahuan</a>
              <a class="navbar" href="index.php?halaman=rule" style="color: white; text-align: center;">Data Rule</a>  
              <a class="navbar" href="index.php?halaman=pasien" style="color: white; text-align: center;">Data Pasien</a>
  
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navside" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </nav>
      </div>
      <div class="row no-gutters " >
        <nav class="" id="navside">
          <ul>
           <li class="nav-item">
            <!-- <a class="nav-link active" href="index.php?">Dashboard</a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="index.php?halaman=penyakit">Data Penyakit</a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="index.php?halaman=gejala">Data Gejala</a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="index.php?halaman=konsultasi">Data Konsultasi</a> -->
          </li>  
              <li class="nav-item">
                <!-- <a class="nav-link" href="index.php?halaman=detailkonsultasi">Detail Konsultasi</a> -->
              </li> 
              <li class="nav-item">
                <!-- <a class="nav-link" href="index.php?halaman=pengetahuan">Data Pengetahuan</a> -->
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="index.php?halaman=rule">Data Rule</a> -->
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="index.php?halaman=pasien">Data Pasien</a> -->
              </li>
         <!--      <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=artikel">Data Artikel </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=logout">Keluar</a>
              </li>
            </ul> 
          </nav>
          <div class="col-md-10" id="data">
            <div id="page-wrapper">
              <div id="page-inner">

               <?php 
                  //jika tidak ada param 'halaman'
               if (!isset($_GET['halaman']) ) 
               {
                include 'dashboard/dashboard.php';
              }
              else
              {
                if ($_GET['halaman']=="penyakit") 
                {
                  include 'penyakit/datapenyakit.php';
                }
                elseif ($_GET['halaman']=='tambahpenyakit') 
                {
                  include 'penyakit/tambahpenyakit.php';
                } 
                elseif ($_GET['halaman']=='ubahpenyakit') 
                {
                  include 'penyakit/ubahpenyakit.php';
                } 
                elseif ($_GET['halaman']=='hapuspenyakit') {
                  include 'penyakit/hapuspenyakit.php';
                }
                elseif ($_GET['halaman']=='gejala') 
                {
                  include 'gejala/datagejala.php';
                }
                elseif ($_GET['halaman']=='ubahgejala') 
                {
                  include 'gejala/ubahgejala.php';
                }
                elseif ($_GET['halaman']=='hapusgejala') 
                {
                  include 'gejala/hapusgejala.php';
                }
                elseif ($_GET['halaman']=='pengetahuan') 
                {
                  include 'pengetahuan/datapengetahuan.php';
                }
                elseif ($_GET['halaman']=='tambahpengetahuan') 
                {
                  include 'pengetahuan/tambahpengetahuan.php';
                }
                elseif ($_GET['halaman']=='ubahpengetahuan') 
                {
                  include 'pengetahuan/ubahpengetahuan.php';
                } 
                elseif ($_GET['halaman']=='hapuspengetahuan') 
                {
                  include 'pengetahuan/hapuspengetahuan.php';
                }
                elseif ($_GET['halaman']=='tambahgejala')
                {
                 include 'gejala/tambahgejala.php';
               }
               elseif ($_GET['halaman']=='konsultasi') {
                include 'konsultasi/datakonsultasi.php';
              }
              elseif ($_GET['halaman']=='detailkonsultasi') 
              {
                include 'konsultasi/detailkonsultasi.php';
              }
              elseif ($_GET['halaman']=='pasien') {
                include 'pasien/datapasien.php';
              }
              elseif ($_GET['halaman']=='hapuspasien')
              {
                include 'pasien/hapuspasien.php';
              }
              elseif ($_GET['halaman']=='tambahpasien') {
                include 'pasien/tambahpasien.php';
              }
              elseif ($_GET['halaman']=='ubahpasien') {
                include 'pasien/ubahpasien.php';
              }
              elseif ($_GET['halaman']=='rule') {
                include 'rule/datarule.php';
              } 
              elseif ($_GET['halaman']=='tambahrule') {
                include 'rule/tambahrule.php';
              } 
              elseif ($_GET['halaman']=='hapusrule') {
                include 'rule/hapusrule.php';
              } 
              elseif ($_GET['halaman']=='ubahrule') {
                include 'rule/ubahrule.php';
              }
              elseif ($_GET['halaman']=='artikel') {
                include 'artikel/artikel.php';
              }
              elseif ($_GET['halaman']=='logout') {
                unset($_SESSION['admin']);
                echo "<script>location='login.php';</script>";
              }
            }
            ?>               
          </div>
        </div>

      </div>  
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatables').DataTable();
    } );
  </script>
  <script src="ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("ckeditor");
  </script>
</body>
</html>