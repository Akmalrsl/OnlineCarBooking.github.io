<?php
include ('dbconnect.php');
include 'cbssession.php';
include 'headerstaff.php';

// get form data
$freg = $_POST['freg'];
$ftype = $_POST['ftype'];
$fmodel = $_POST['fmodel'];
$fyear = $_POST['fyear'];
$fprice = $_POST['fprice'];
$fimage = $_FILES['fimage'];

// handle image file
$image = $_FILES['fimage']['name'];
$image_tmp = $_FILES['fimage']['tmp_name'];

move_uploaded_file($image_tmp, "img/$image");


try {
    // insert data into database
    $query = "INSERT INTO tb_vehicle (v_reg, v_type, v_model, v_year, v_price, v_image) VALUES('$freg','$ftype','$fmodel','$fyear','$fprice', '$image')";
    $result = mysqli_query($con, $query);

    if ($result) {
        $affected_rows = mysqli_affected_rows($con);
        if ($affected_rows > 0) {
            echo "Data inserted successfully";
        } else {
            echo "Data already exists";
        }
    } else {
        throw new Exception("Error inserting data: " . mysqli_error($con));
    }
} catch (Exception $e) {
    if (strpos($e->getMessage(), "Duplicate entry") !== false) {
        echo "Error: Duplicate entry detected";
    } else {
        echo $e->getMessage();
    }
}

mysqli_close($con);
?>
<?php include 'footer.php'; ?>