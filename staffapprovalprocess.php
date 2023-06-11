<?php 
include 'cbssession.php';
include("dbconnect.php");
if (!session_id())
{
	session_start();
}

//retrieve data from approval page
$fbid = $_POST['fbid'];
$fstatus = $_POST['fstatus'];

//UPDATE booking status
$sql = "UPDATE tb_booking
		SET b_status='$fstatus'
		WHERE b_id='$fbid'";

//var_dump($sql);



mysqli_query($con,$sql);
mysqli_close($con);

header('location:staffview.php');
?>