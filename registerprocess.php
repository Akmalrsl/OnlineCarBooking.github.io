<?php 
include 'cbssession.php';
include("dbconnect.php");
include 'headercustomer.php';


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$fic = mysqli_real_escape_string($con, $_POST['fic']);
$fpwd = password_hash($_POST['fpwd'], PASSWORD_DEFAULT);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$femail = mysqli_real_escape_string($con, $_POST['femail']);
$fadd = mysqli_real_escape_string($con, $_POST['fadd']);
$flno = mysqli_real_escape_string($con, $_POST['flno']);
$fcontact = mysqli_real_escape_string($con, $_POST['fcont']);

$sql = "INSERT INTO tb_user (u_id, u_pwd, u_name,u_email, u_address, u_phone, u_lno, u_type)
            VALUES ('$fic','$fpwd','$fname','$femail','$fadd','$fcontact','$flno','2')";

$result = mysqli_query($con,$sql);
if ($result) {
   echo  "<script>
      window.location.href='login.php';
      alert('Registration Succesful! Please login to book!');
      </script>";
} else {
    echo "Error inserting record: " . mysqli_error($con);
   die(mysqli_close($con));
}


include 'footermain.php';
?>