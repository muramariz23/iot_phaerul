<?php 
include '../config/database.php';
		
		$db = new database();
		$con = $db->connect(); 

$nokartu=$_GET['nokartu'];
$idlab=$_GET['idlab'];
//$mode=1;

// cek terdaftar atau tidak 
$datamode= mysqli_query($con,"select * from status");
$mode1=mysqli_fetch_array($datamode);
$mode_absen=$mode1['mode'];

$cari = mysqli_query($con,"select * from siswa where nokartu='$nokartu'");
if (mysqli_num_rows($cari)==0)
{
	echo "Anda belum terdaftar...";
	echo $mode_absen;

	}
	//simpan di tabel tmprfid

	$simpan=mysqli_query($con,"insert into tmprfid(nokartu,idlab) values('$nokartu','$idlab')");
	if($simpan){
		echo "berhasil";
	}
	else{
		echo "gagal";
	}

//else
{
	$data=mysqli_fetch_array($cari);
	$nama=$data['nama'];
	echo "Hallo ".$nama;
	echo "mode ".$mode_absen;


// setting tanggal
	date_default_timezone_set('Asia/Makassar');
	$tanggal=date('Y-m-d');
	$jam    =date('H:i:s');

// cari data absensi
	$cariabsen = mysqli_query($con,"select * from absensi where nokartu='$nokartu' and tanggal='$tanggal' and jam_masuk");
	$jml_absen = mysqli_fetch_array($cariabsen);
	if ($jml_absen==0)
	{
		mysqli_query($con,"insert into absensi (nokartu, tanggal, jam_masuk, idlab)values('$nokartu','$tanggal','$jam','$idlab')");
	}
	else if ($mode_absen==2)
	{
		mysqli_query($con,"update absensi set jam_keluar='$jam' where nokartu='$nokartu' and tanggal='$tanggal'");
	}
	else
	{
		echo "sdh absen";
	}

	}
	
mysqli_query($con,"delete * from tmprfid");


?>