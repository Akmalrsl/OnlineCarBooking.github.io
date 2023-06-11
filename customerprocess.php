<?php 
include("dbconnect.php");
if(!session_id())
{
	session_start();
}

$uid =$_SESSION['uid'];
$fvec =$_POST['fvec'];
$fpdate =$_POST['fpdate'];
$frdate =$_POST['frdate'];

// Check if the input values are set
if(!isset($fvec) || !isset($fpdate) || !isset($frdate)) {
  header('location:customermanage.php');
  exit();
}

//Calculate Number Of Days
$pickup = date('Y-m-d H:i:s', strtotime($fpdate));
$return = date('Y-m-d H:i:s', strtotime($frdate));
$daydiff = abs(strtotime($fpdate)-strtotime($frdate));

//Retrieve Price
$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg = '$fvec'";
$resultprice = mysqli_query($con, $sqlprice);

// Check if the query was executed successfully
if(!$resultprice) {
  header('location:customermanage.php');
  exit();
}

// Check if the vehicle exists
$rowprice = mysqli_fetch_array($resultprice);
if(!$rowprice) {
  header('location:customermanage.php');
  exit();
}

//calc total price 
$daynum = $daydiff/(60*60*24);
$totalprice = $daynum*($rowprice['v_price']);

//record[insert] new booking in DB
$sql = "INSERT INTO tb_booking (b_customer,b_vehicle,b_pickupdate,b_returndate,b_totalprice,b_status)
		VALUES ('$uid' ,'$fvec' ,'$fpdate' ,'$frdate' ,'$totalprice' , '1')";

// Check if the query was executed successfully
$result = mysqli_query($con,$sql);
if(!$result) {
  header('location:customermanage.php');
  exit();
}

mysqli_close($con);

//redirect
header('location:customermanage.php');
?>