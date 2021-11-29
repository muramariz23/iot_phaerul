

<?php 

		include '../config/database.php';
		
		$db = new database();
		$con = $db->connect();


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