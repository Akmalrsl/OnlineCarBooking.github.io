<?php 
session_start();

include("dbconnect.php");

//Retrieve Input
$fic = $_POST['fic'];
$fpwd =$_POST['fpwd'];

//Retrieve User Data from DB
$sql = " SELECT * FROM tb_user WHERE u_id = '$fic'";

//Execute SQL
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

//Login Check
if($count == 1 && password_verify($fpwd, $row['u_pwd'])) //User Found
{
    //Set Session
    $_SESSION['u_id'] =  session_id();
    $_SESSION['uid'] = $fic;

    if($row['u_type'] == 1) //Staff
    {
        header('location:staff.php');
    }
    else //Customer
    {
        header('location:customer.php');
    }

}
else //User Not Found
{
    //Display Error
    echo "<script>
      window.location.href='login.php';
      alert('User not found');
      </script>";

}

//Close Connection
mysqli_close($con);

?>