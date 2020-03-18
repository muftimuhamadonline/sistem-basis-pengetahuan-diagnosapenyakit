	<?php 
	session_start();
	$mysqli = new mysqli("localhost" , "root" , "" ,"pta-mufti-uji");

	class admin
	{
		public $koneksi;
		function __construct($mysqli)
		{
			$this->koneksi=$mysqli;
		}

		function login($email , $password)
		{
			$password = md5($password);
			//cek data db admin
			$cek = $this->koneksi->query("SELECT * FROM admin WHERE email_admin='$email' AND password_admin='$password'" );
			$hitung = mysqli_num_rows($cek);
			//jika data ada maka simpan 'admin' di session
			if ($hitung == 1) {
				$datalogin = $cek->fetch_assoc();
				$_SESSION['admin'] = $datalogin;
				return 'sukses';
			}
			else
			{
				return 'gagal';
			}
		}

		function ubahprofile($nama_admin, $tlp_admin, $alamat_admin, $email_admin,$id_admin)
		{
			$this->koneksi->query("UPDATE admin
				SET nama_admin='$nama_admin',tlp_admin='$tlp_admin', alamat_admin='$alamat_admin', email_admin='$email_admin' WHERE id_admin='$id_admin'");
			$_SESSION['admin']['nama_admin']=$nama_admin;
			$_SESSION['admin']['tlp_admin']=$tlp_admin;
			$_SESSION['admin']['alamat_admin']=$alamat_admin;
			$_SESSION['admin']['email_admin']=$email_admin;
		}
	}

	$admin = new admin($mysqli);

	class diagnosapenyakit
	{

		public $koneksi;
		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;
		}

		function tampilpenyakit ()
		{
			$ambil = $this->koneksi->query("SELECT * FROM penyakit");
			while($pecah = $ambil->fetch_assoc())
			{
				$data[] =$pecah;
			}

			return $data;
		}

		function tambahpenyakit ($nama, $deskripsi, $saran)
		{
			$this->koneksi->query("INSERT INTO penyakit(nama_penyakit , deskripsi_penyakit , saran_penyakit)
				VALUES('$nama', '$deskripsi', '$saran')");

			return 'sukses';
		}

		function ambildata($id) 
		{
			$ambil = $this->koneksi->query("SELECT * FROM penyakit WHERE id_penyakit='$id'");
			$pecah = $ambil->fetch_assoc();

			return $pecah;
		} 

		function hapuspenyakit($id)
		{
			// $hapus = $this->ambildata($id);
			$this->koneksi->query("DELETE FROM penyakit WHERE id_penyakit='$id';");

		}

		function ubahpenyakit($nama_penyakit,$deskripsi,$saran,$id)
		{
			$this->koneksi->query("UPDATE penyakit SET 
				nama_penyakit='$nama_penyakit',
				deskripsi_penyakit='$deskripsi',
				saran_penyakit='$saran'
				WHERE id_penyakit='$id'");
			return "sukses";
		}
	} 

	$diagnosapenyakit = new diagnosapenyakit($mysqli);

	 /**
	 * 
	 */
	 class pengetahuan
	 {
	 	
	 	public $koneksi;
	 	public function __construct($mysqli)
	 	{
	 		$this->koneksi = $mysqli;
	 	}

	 	function tampilpengetahuan()
	 	{
	 		$data = array();
	 		$ambil = $this->koneksi->query("SELECT * FROM pengetahuan 
	 			JOIN penyakit ON penyakit.id_penyakit=pengetahuan.id_penyakit
	 			JOIN gejala ON gejala.id_gejala=pengetahuan.id_gejala");
	 		while($pecah = $ambil->fetch_assoc())
	 		{
	 			$data[] =$pecah;
	 		}

	 		return $data;
	 	} 

	 	function tampilpengetahuanpenyakit($id_penyakit)
	 	{
	 		$data = array();
	 		$ambil = $this->koneksi->query("SELECT * FROM pengetahuan 
	 			JOIN penyakit ON penyakit.id_penyakit=pengetahuan.id_penyakit 
	 			JOIN gejala ON gejala.id_gejala=pengetahuan.id_gejala
	 			WHERE pengetahuan.id_penyakit='$id_penyakit'");
	 		while ($pecah = $ambil->fetch_assoc()) 
	 		{
	 			$data[] = $pecah;
	 		}
	 		return $data;
	 	}

	 	function ubahpengetahuan($id_penyakit,$id_gejala,$id_pengetahuan)
	 	{
	 		$this->koneksi->query("UPDATE pengetahuan SET 
	 			id_penyakit='$id_penyakit',
	 			id_gejala='$id_gejala'
	 			WHERE id_pengetahuan='$id_pengetahuan'");
	 		return "sukses";
	 	}

	 	function tambahpengetahuan($id_penyakit , $data_gejala)
	 	{	
	 		foreach ($data_gejala as $key => $value) {
	 			$this->koneksi->query("INSERT INTO pengetahuan(id_penyakit, id_gejala) VALUES 
	 				('$id_penyakit' , '$key')") or die(mysqli_error($this->koneksi));
	 		}

	 		return 'sukses';
	 	}

	 	function hapuspengetahuan($id)
	 	{
	 		$this->koneksi->query("DELETE FROM pengetahuan WHERE id_pengetahuan='$id'");
	 	}

	 	function ambilpengetahuan($idpengetahuan)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM pengetahuan where id_pengetahuan='$idpengetahuan'");
	 		$pecah = $ambil->fetch_assoc();
	 		return $pecah;
	 	}



	 }

	 $pengetahuan = new pengetahuan($mysqli);



	 class gejala
	 {
	 	
	 	public $koneksi;
	 	function __construct($mysqli)
	 	{
	 		$this->koneksi = $mysqli;
	 	}

	 	function tampilgejala()
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM gejala");
	 		while($pecah = $ambil->fetch_assoc())
	 		{
	 			$data[] =$pecah;
	 		}

	 		return $data;
	 	} 
	 	
	 	function tambahgejala($gejala)
	 	{
	 		$simpan =$this->koneksi->query("INSERT INTO gejala (nama_gejala) VALUES ('$gejala')");

	 		return $simpan;
	 	}

	 	function hapusgejala($id)
	 	{
	 		$this->koneksi->query("DELETE FROM gejala WHERE id_gejala='$id'");
	 	}

	 	function ambilgejala($id)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM gejala WHERE id_gejala='$id'");
	 		$pecah =$ambil->fetch_assoc();
	 		return $pecah;
	 	}

	 	function ubahgejala($nama_gejala, $id)
	 	{
	 		$this->koneksi->query("UPDATE gejala SET 
	 			nama_gejala='$nama_gejala'
	 			WHERE id_gejala='$id'");
	 		return "sukses";
	 	}
	 	



	 }

	 $gejala = new gejala($mysqli);


	 /**
	 * 
	 */
	 class pasien
	 {

	 	public $koneksi;

	 	function __construct($mysqli)
	 	{
	 		$this->koneksi = $mysqli;
	 	}

	 	function tampilpasien()
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM pasien");
	 		while($pecah = $ambil->fetch_assoc())
	 		{
	 			$data[] = $pecah;
	 		}

	 		return $data;
	 	}

	 	function tambahpasien($nama , $alamat , $tlp , $ttl , $kelamin ,$email,$pass)
	 	{
	 		$cek = $this->koneksi->query("SELECT * FROM pasien WHERE email_pasien='$email'");
	 		$hitung = mysqli_num_rows($cek);
	 		if ($hitung==0) {
	 			$simpan = $this->koneksi->query("INSERT INTO pasien(nama_pasien , alamat_pasien , tlp_pasien , tanggal_lahir , 												jenis_kelamin_pasien , email_pasien , password_pasien)
	 				VALUES('$nama' , '$alamat' , '$tlp' , '$ttl' , '$kelamin' , '$email', '$pass')");
	 			return 'sukses';
	 		}
	 		else
	 		{
	 			return 'gagal';
	 		}
	 	}

	 	function ambilpasien($id)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM pasien WHERE id_pasien='$id'");
	 		$data = $ambil->fetch_assoc();

	 		return $data;
	 	}


	 	function hapuspasien($id)
	 	{
	 		$this->koneksi->query("DELETE FROM pasien WHERE id_pasien='$id'")or die(mysqli_error($this->koneksi));
	 	}

	 	function ubahpasien($nama , $alamat , $tlp , $ttl , $kelamin ,$email, $id)
	 	{
	 		$this->koneksi->query("UPDATE pasien SET 
	 			nama_pasien='$nama',
	 			alamat_pasien='$alamat',
	 			tlp_pasien='$tlp',
	 			tanggal_lahir='$ttl',
	 			jenis_kelamin_pasien='$kelamin',
	 			email_pasien='$email'
	 			WHERE id_pasien='$id'");
	 		return 'sukses';
	 	}

	 	function loginpasien($email,$password)
	 	{
	 		//validasi untuk menghindari sql injection
	 		$email = mysqli_real_escape_string($this->koneksi, $email);
	 		$password = mysqli_real_escape_string($this->koneksi, $password);
	 		//cek data dari form ke db
	 		$cek = $this->koneksi->query("SELECT * FROM pasien 
	 			WHERE email_pasien='$email' AND password_pasien='$password'");
	 		$hitung = mysqli_num_rows($cek);
	 		if ($hitung == 1) {
	 			$data = $cek->fetch_assoc();
	 			//menyimpan kedalam session pasien
	 			$_SESSION['pasien'] = $data;
	 			return 'sukses';
	 		}
	 		else
	 		{
	 			return 'gagal';
	 		}
	 	}

	 	function ubahpassword($password_pasien,$id_pasien)
	 	{
	 		$this->koneksi->query("UPDATE pasien SET password_pasien='$password_pasien'
	 			WHERE id_pasien='$id_pasien'");
	 		$_SESSION['pasien']['password_pasien']=$password_pasien;
	 	}



	 }

	 $pasien = new pasien($mysqli);


	 class rule extends pengetahuan
	 {
	 	public $koneksi;

	 	function __construct($mysqli){
	 		$this->koneksi= $mysqli;
	 	}

	 	function tampilrule()
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM rule");
	 		while ($pecah= $ambil->fetch_assoc()) 
	 		{
	 			$data[] =$pecah;
	 		}

	 		return $data;
	 	}

	 	function ambilrule($id)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM rule WHERE id_rule='$id'");
	 		$data = $ambil->fetch_assoc();

	 		return $data;
	 	}

	 	function tambahrule($gparent,$gpertanyaan,$gya,$gtidak,$penyakit)
	 	{
	 		$simpan = $this->koneksi->query("INSERT INTO rule(id_gejala_parent , id_gejala_pertanyaan , 												id_gejala_ya , id_gejala_tidak , id_penyakit)
	 			VALUES('$gparent' , '$gpertanyaan' , '$gya' , '$gtidak' , '$penyakit')");
	 		return $simpan;
	 	}

	 	function ubahrule($gejala_parent,$gejala_pertanyaan,$gejala_ya,$gejala_tidak,$id_penyakit,$id)
	 	{
	 		$this->koneksi->query("UPDATE rule SET 
	 			id_gejala_parent='$gejala_parent',
	 			id_gejala_pertanyaan='$gejala_pertanyaan',
	 			id_gejala_ya='$gejala_ya',
	 			id_gejala_tidak='$gejala_tidak',
	 			id_penyakit='$id_penyakit'
	 			WHERE id_rule='$id'");
	 		return "sukses";
	 	}

	 	function hapusrule($id)
	 	{
	 		$this->koneksi->query("DELETE FROM rule WHERE id_rule='$id'");
	 	}

	 	function pertanyaanpertama()
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM rule WHERE id_gejala_parent='0'");
	 		$pecah = $ambil->fetch_assoc();
	 		$_SESSION['konsultasi'][$pecah['id_rule']] = $pecah; 

	 	}

	 	function kelolajawaban($pertanyaan,$jawaban)
	 	{
	 		$pertanyaansekarang = $pertanyaan['id_gejala_pertanyaan'];
	 		if ($jawaban == 'ya') 
	 		{
	 			if ($pertanyaan['id_gejala_ya']!=="0")
	 			{
	 				$_SESSION['jawaban'][$pertanyaansekarang]="ya";
	 				$pertanyaanselanjutnya = $pertanyaan['id_gejala_ya'];
	 				$selanjutnya = "lanjut";
	 			}
	 			else
	 			{
	 				$_SESSION['jawaban'][$pertanyaansekarang]="ya";

	 				$pertanyaanselanjutnya = "";
	 				$selanjutnya = "selesai";
	 			}
	 		}
	 		else
	 		{
	 			if ($pertanyaan['id_gejala_tidak']!=="0") 
	 			{
	 				$_SESSION['jawaban'][$pertanyaansekarang]="tidak";
	 				$pertanyaanselanjutnya = $pertanyaan['id_gejala_tidak'];
	 				$selanjutnya = 'lanjut';
	 			}
	 			else
	 			{
	 				$_SESSION['jawaban'][$pertanyaansekarang]="tidak";
	 				$pertanyaanselanjutnya = "";
	 				$selanjutnya = "selesai";
	 			}
	 		}
	 		$this->pertanyaanselanjutnya($pertanyaansekarang,$pertanyaanselanjutnya);
	 		return $selanjutnya;
	 	}

	 	function pertanyaanselanjutnya($id_gejala_parent,$id_gejala_pertanyaan)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM rule WHERE id_gejala_parent='$id_gejala_parent' 
	 			AND id_gejala_pertanyaan='$id_gejala_pertanyaan'");
	 		$pecah = $ambil->fetch_assoc();
	 		$_SESSION['konsultasi'][$pecah['id_rule']] = $pecah; 
	 	}

	 	function hitungpenyakit($datadetailkonsultasi)
	 	{
	 		$data = array();

	 		//mengambildatapengetahuan
	 		$datapengetahuan = $this->tampilpengetahuan();

	 		//mengelompokan data penyakit sesuai dengan pengetahuan
	 		foreach ($datapengetahuan as $key => $value) 
	 		{
	 			$data['pengetahuan'][$value['id_penyakit']][] = $value['id_gejala'];
	 		}

	 		//mengelompokan data gejala sesuai jawaban
	 		foreach ($datadetailkonsultasi as $key => $value) 
	 		{
	 			$data['jawaban'][] = $value['id_gejala'];
	 		}

	 		//mencari jumlah gejala yang sama antarajawaban dan pengetahuan
	 		if (!empty($data['jawaban'])) 
	 		{
	 			foreach ($data['pengetahuan'] as $id_penyakit => $value) 
	 			{
	 				//gunakan fungsi array intersect untuk membandingkan 2 data array, lalu mengembalikan data yang sama 
	 				$data['hasil_perbandingan'][$id_penyakit] = array_intersect($value, $data['jawaban']);

	 				//mencari jumlah gejala pengetahuan
	 				$data['jumlah_pengetahuan'][$id_penyakit] = count($value);
	 				//mencari jumlah gejala perbandingan 
	 				$data['jumlah_jawaban'][$id_penyakit] = count($data['hasil_perbandingan'][$id_penyakit]);
	 				//mencari persen =jumlah jawaban sama / jumlah pengetahuan * 100
	 				$data['persen_penyakit'][$id_penyakit] = $data['jumlah_jawaban'][$id_penyakit] / $data['jumlah_pengetahuan'][$id_penyakit] * 100;
	 			}

	 			//mengurutkan berdasarkan persen
	 			arsort($data['persen_penyakit']);

	 			//membuat keterangan sesuai jumlah persen
	 			foreach ($data['persen_penyakit'] as $id_penyakit => $persen_penyakit) 
	 			{
	 				if($persen_penyakit >= 80)
	 				{
	 					$data['keterangan'][$id_penyakit] = " pasti ";
	 				}elseif ($persen_penyakit >= 10) 
	 				{
	 					$data['keterangan'][$id_penyakit] = " kemungkinan ";
	 				}
	 				elseif ($persen_penyakit < 10) 
	 				{
	 					$data['keterangan'][$id_penyakit] = " penyakit tidak ditemukan ";
	 				}
	 			}

	 			//menampilakan data hasil konsultasi
	 			foreach ($data['keterangan'] as $id_penyakit => $keterangan) 
	 			{
	 				foreach ($datapengetahuan as $key => $value) 
	 				{
	 					if ($value ['id_penyakit']==$id_penyakit) 
	 					{
	 						$data['hasil'][$id_penyakit]['nama_penyakit'] = $value['nama_penyakit'];
	 						$data['hasil'][$id_penyakit]['persen'] = $data['persen_penyakit'][$id_penyakit];
	 						$data['hasil'][$id_penyakit]['keterangan'] = $keterangan;
	 						$data['hasil'][$id_penyakit]['deskripsi_penyakit'] = $value['deskripsi_penyakit'];
	 						$data['hasil'][$id_penyakit]['saran_penyakit'] = $value['saran_penyakit'];
	 					}
	 				}
	 			}
	 			return $data;
	 		}
	 		else
	 		{
	 			return 'kosong';
	 		}
	 	}
	 }
	 $rule = new rule($mysqli);

	 class konsultasi
	 {
	 	public $koneksi;
	 	
	 	function __construct($mysqli)
	 	{
	 		$this->koneksi=$mysqli;
	 	}

	 	function tambahkonsultasi($id_pasien,$tanggal,$jawaban)
	 	{
	 		$this->koneksi->query("INSERT INTO konsultasi (id_pasien,tgl_konsultasi) 
	 			VALUES ('$id_pasien','$tanggal')");

	 			//mengambil id_konsultasi yang baru disimpan
	 		$id_konsultasi = mysqli_insert_id($this->koneksi);
	 		foreach ($jawaban as $id_gejala => $value) 
	 		{
	 			if ($value == 'ya') {
	 					# code...
	 				$this->koneksi->query("INSERT INTO detail_konsultasi (id_konsultasi,id_gejala)
	 					VALUES ('$id_konsultasi','$id_gejala')");
	 			}
	 		}
	 		unset($_SESSION['konsultasi']);
	 		unset($_SESSION['jawaban']);
	 		return $id_konsultasi;
	 	}

	 	function ambildetailkonsultasi($id_konsultasi)
	 	{
	 		$data = array();
	 		$ambil = $this->koneksi->query("SELECT * FROM detail_konsultasi WHERE 
	 			id_konsultasi='$id_konsultasi'");
	 		while ($pecah= $ambil->fetch_assoc()) 
	 		{
	 			$data[] = $pecah;
	 		}

	 		return $data;
	 	}

	 	function ambildata($id)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM konsultasi WHERE id_pasien='$id'");
	 		$pecah = $ambil->fetch_assoc();
	 		$data[] = $pecah;
	 		return $pecah;
	 	}
	 	function tampilkonsultasi($id)
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM konsultasi JOIN pasien ON pasien.id_pasien=konsultasi.id_pasien WHERE konsultasi.id_pasien='$id' ORDER BY konsultasi.id_konsultasi DESC");
	 		while ($pecah= $ambil->fetch_assoc()) 
	 		{
	 			$data[] = $pecah;
	 		}
	 		return $data;
	 	}
	 	function tampilkonsultasiadmin()
	 	{
	 		$ambil = $this->koneksi->query("SELECT * FROM konsultasi JOIN pasien ON pasien.id_pasien=konsultasi.id_pasien ORDER BY konsultasi.id_konsultasi DESC");
	 		while ($pecah = $ambil->fetch_assoc())
	 		{
	 			$data[] = $pecah;

	 		}
	 		return $data;
	 	}
	 }
	 $konsultasi = new konsultasi($mysqli);
	 ?>