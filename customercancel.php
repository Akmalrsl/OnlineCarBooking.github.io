<?php 
include 'cbssession.php';
include("dbconnect.php");
if(!session_id())
{
	session_start();
}



//get bookimg ID from URL
if(isset($_GET['id']))
{
	$bid = $_GET['id'];
}

//SQL DELETE
$sql = "DELETE FROM tb_booking WHERE b_id= '$bid'";

$result = mysqli_query($con,$sql);
mysqli_close($con);

header ('location:customermanage.php');

?>
