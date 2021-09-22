
<?php 
include '../config/database.php';
		
		$db = new database();
		$con = $db->connect();

$sql=mysqli_query($con,"select * from status");
$data=mysqli_fetch_array($sql);
$mode=$data['mode'];

$mode_status="";
if($mode==1)
	$mode_status="Masuk";
else if ($mode==0)
	$mode_status="Pulang";

$baca_kartu = mysqli_query($con,"select * from tmprfid");
$data_kartu = mysqli_fetch_array($baca_kartu);
$nokartu    = $data_kartu['nokartu'];
?>
<div class="container-fluid" style="text-align: center;">
	
	<h3> Mode : <?php echo $mode_status; ?></h3>
	<h3>Silahkan tempelkan kartu anda</h3>
	<h3> No Kartu : <?php echo $nokartu; ?></h3>


</div>