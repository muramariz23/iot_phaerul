<!-- <?php

//baca tabel status untuk mode absensi

// $sql = mysqli_query($konek, "select * from status");
// $data = mysqli_fetch_array($sql);
// $mode_absen = $data['mode'];

//uji mode absen
// $mode = "";
// if ($mode_absen == 1)
// 	$mode = "Masuk";
// else if ($mode_absen == 2)
// 	$mode = "Pulang";

//baca tabel tmprfid
$baca_kartu = mysqli_query($con, "select * from tmprfid");
// $jumlah_data = mysqli_num_rows($baca_kartu);
$data_kartu = mysqli_fetch_array($baca_kartu);

if ($data_kartu == null) {
	$nokartu = '';
} else {
	$nokartu = $data_kartu['nokartu'];
}



?>

<div class="container-fluid" style="text-align: center;">

	<?php

	//tanggal dan jam hari ini
	date_default_timezone_set('Asia/Jakarta');
	$tanggal = date('Y-m-d');
	$jam     = date('H:i:s');

	$waktu_absen = mysqli_query($con, "select * from w_absen");
	$data_w = mysqli_fetch_array($waktu_absen);
	$jMasuk_awal = $data_w['jMasuk_aw'];
	$jMasuk_akhir = $data_w['jMasuk_ak'];
	$jPulang_awal = $data_w['jPulang_aw'];
	$jPulang_akhir = $data_w['jPulang_ak'];

	// jam masuk dan jam pulang
	
	?>

	<?php if (empty($nokartu)) { ?>

		<?php if (($jam > $jMasuk_awal) && ($jam < $jMasuk_akhir)) { ?>
			<h3>Absen : <?php echo "MASUK"; ?> </h3>
		<?php } else if (($jam >= $jPulang_awal) && ($jam <= $jPulang_akhir)) { ?>
			<h3>Absen : <?php echo "PULANG"; ?> </h3>
		<?php } else { ?>
			<h3>Absen</h3>
		<?php } ?>


		<h3>Silahkan Tempelkan Kartu RFID Anda</h3>

	<?php } else {
		//cek nomor kartu RFID tersebut apakah terdaftar di tabel karyawan
		$cari_karyawan = mysqli_query($con, "select * from karyawan where nokartu='$nokartu'");
		$jumlah_data = mysqli_num_rows($cari_karyawan);

		if ($jumlah_data == 0) {

			echo "<h1>Maaf ! Kartu Tidak Dikenali</h1>";
		} else {

			if ((time() >= $jMasuk_awal) && (time() <= $jMasuk_akhir)) {

				//ambil nama karyawan
				$data_karyawan = mysqli_fetch_array($cari_karyawan);
				$nama = $data_karyawan['nama'];

				//cek di tabel absensi, apakah nomor kartu tersebut sudah ada sesuai tanggal saat ini. Apabila belum ada, maka dianggap absen masuk, tapi kalau sudah ada, maka update data sesuai mode absensi

				$cari_absen = mysqli_query($con, "select * from absensi where nokartu='$nokartu' and tanggal='$tanggal'");
				// hitung jumlah datanya
				$jumlah_absen = mysqli_num_rows($cari_absen);
				if ($jumlah_absen == 0) {

					echo "<h1>Selamat Datang <br>$nama</h1>";
					mysqli_query($con, "insert into absensi(nokartu, tanggal, jam_masuk)values('$nokartu', '$tanggal', '$jam')");
				} else {
					echo "<h1>$nama Sudah Absen <br> Masuk</h1>";
				}
			} else if ((time() >= $jPulang_awal) && (time() <= $jPulang_akhir)) {

				//ambil nama karyawan
				$data_karyawan = mysqli_fetch_array($cari_karyawan);
				$nama = $data_karyawan['nama'];

				//cek di tabel absensi, apakah nomor kartu tersebut sudah ada sesuai tanggal saat ini. Apabila belum ada, maka dianggap absen masuk, tapi kalau sudah ada, maka update data sesuai mode absensi

				$cari_absen = mysqli_query($con, "select * from absensi where nokartu='$nokartu' and tanggal='$tanggal'");
				$absen_pulang = mysqli_num_rows($cari_absen);
				//hitung jumlah datanya
				// $jumlah_absen = mysqli_num_rows($cari_absen);
				if ($absen_pulang == 0) {
					echo "<h1>Selamat Jalan <br> $nama</h1>";
					mysqli_query($con, "insert into absensi(nokartu, tanggal, jam_pulang)values('$nokartu', '$tanggal', '$jam')");
				} else {
					echo "<h1>Selamat Jalan <br> $nama</h1>";
					mysqli_query($con, "update absensi set jam_pulang='$jam' where nokartu='$nokartu' and tanggal='$tanggal'");
				}
			} else {

				echo "<h1>Maaf ! Bukan Waktunya $mode</h1>";
			}
		}

		//kosongkan tabel tmprfid
		mysqli_query($con, "delete from tmprfid");
	} ?>

</div> -->



<?php 

		include '../config/database.php';
		
		$db = new database();
		$con = $db->connect();
 		 
 		 // $query=mysqli_query($con,"select * from status");
 		 // $Get=mysqli_fetch_array($query);

 		 // $mode=$Get['mode'];

 		 // $mode_absen = "";
 		 // if ($mode==1) {
 		 // 	$mode_absen = "masuk";
 		 // }elseif ($mode==0) {
 		 // 	$mode_absen = "pulang";
 		 // }

 		 $querykartu=mysqli_query($con,"select * from tmprfid");
 		 $Getkartu=mysqli_fetch_array($querykartu);
 		 if (!empty($Getkartu)) {
 		 $nokartu=$Getkartu['nokartu'];
 		}

 		 $querykelas=mysqli_query($con,"select * from kelas");
 		 $Getkelas=mysqli_fetch_array($querykelas);
 		 if (!empty($Getkelas)) {
 		 $id_kelas=$Getkelas['id_kelas'];
 		 }

 		 
 		 date_default_timezone_set('Asia/Jakarta');
	$tanggal = date('Y-m-d');
	$jam     = date('H:i:s');

	$waktu_absen = mysqli_query($con, "select * from w_absen");
	$data_w = mysqli_fetch_array($waktu_absen);
	$jMasuk = $data_w['jMasuk'];
	$jMasuk_bt = $data_w['jMasuk_bt'];
	$jPulang = $data_w['jPulang'];

	
 		 		?>

<div>
	<?php if (empty($nokartu)) { ?>
	

	<?php if (($jam <= $jMasuk) ) {
		echo "ABSENSI MASUK";
	} elseif (($jam <= $jMasuk_bt)) {
		echo "TERLAMBAT";
	}

	elseif (($jam <= $jPulang)) {
		echo "WAKTUNYA PULANG";
	}else{
		echo "BELUM WAKTUNYA ABSENSI";
	}
?>
<?php } else {

	$cari_siswa = mysqli_query($con,"select siswa.*, kelas.nama_kelas from siswa join kelas on siswa.id_kelas = kelas.id_kelas where nokartu = '$nokartu'");
	$cari_kelas = mysqli_query($con,"select * from kelas");
	$jumlah_data = mysqli_num_rows($cari_siswa);

	if ($jumlah_data==0) {
		echo "<h1>Kartu Tidak terdaftar</h1>";
	}else{
		$Getkartusiswa = mysqli_fetch_array($cari_siswa);
		$Getnamakelas = mysqli_fetch_array($cari_kelas);
		$nama_siswa = $Getkartusiswa['nama'];
		$nama_kelas = $Getnamakelas['id_kelas'];

		date_default_timezone_set('Asia/Jakarta');
            $tanggal = date('Y-m-d');
            $jam = date('H:i:s');

            //cari absen
            $cari_absen = mysqli_query($con,"select * from absensi where nokartu = '$nokartu' and tanggal = '$tanggal'");
            //hitung jumlah absen
            $jumlah_absen =  mysqli_num_rows($cari_absen);

            if ($jumlah_absen == 0) {
            	if (($jam <= $jMasuk) ) {
				echo "<h1>SELAMAT DATANG<br>$nama_siswa</h1>" ;
            	mysqli_query($con,"insert into `absensi` (`id_absen`, `nokartu`, `id_kelas`, `tanggal`, `jam_masuk`) values (NULL, '$nokartu', '$nama_kelas', '$tanggal', '$jam');");
			}elseif (($jam <= $jMasuk_bt)) {
				echo "<h1>ANDA TERLAMBAT<br>$nama_siswa</h1>";
			}else{
				echo "ANDA BELUM ABSEN MASUK";
			}           


            }elseif (($jam >= $jMasuk_bt)){
            	 
            		echo "<h1>SELAMAT PULANG<br>$nama_siswa</h1>";
            		mysqli_query($con, "update absensi set jam_pulang='$jam' where nokartu = '$nokartu' and tanggal = '$tanggal'");
            	
            } elseif ($jam <= $jMasuk && $jumlah_absen == 1) {
            	echo "ANDA SUDAH ABSENSI";
            } 

	}

	//mengosongkan tabel tmprfid
	mysqli_query($con, "delete from tmprfid ");
	}
	?>
</div>