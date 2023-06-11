<?php 
include 'cbssession.php';
include ('dbconnect.php');
if (!session_id())
{
    session_start();
}


include 'headerstaff.php'; 


//get booking ID from URL
if(isset($_GET['id']))
{
    $bid = $_GET['id'];
}

?>

<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 4px;
    }

    .form-group input[type="file"] {
        margin-top: 10px;
    }

    .form-group button {
        margin-top: 20px;
        margin-right: 10px;
    }

    .form-group button:last-child {
        margin-right: 0;
    }
</style>


<div class="container">

        <br><br>

<form method="POST" action="staffupdatevehicleprocess.php" enctype="multipart/form-data">
  <fieldset>
    <legend><h1>ADD NEW VEHICLE</h1></legend>

    

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Register Number</label>
      <input type="text" name="freg" class="form-control" id="exampleInputPassword1" placeholder="Enter The Vehicle Register Number" required>
    </div>


        <div class="form-group">
  <label for="exampleSelect1" class="form-label mt-4">Type</label>
  <select name="ftype" class="form-select" id="exampleSelect1" placeholder="Enter The Vehicle Type">
    <option value="">Select Type</option>
    <option value="SEDAN">SUV</option>
    <option value="CROSSOVER">SUBCOMPACT CAR</option>
    <option value="UNIVERSAL">CONVERTIBLE</option>
    <option value="LIFTBACK">MPV</option>
    <option value="COUPE">SEDAN</option>
    <option value="SPORT CAR">SPORT CAR</option>
    <option value="MINIVAN">PICKUP TRUCK</option>
  </select>
</div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Model</label>
      <input type="text" name="fmodel" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Vehiclde Model" required>
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Year</label>
      <input type="text" name="fyear" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Vehicle Year" required>
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Price</label>
      <input type="text" name="fprice" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Car Rent Price" required>
    </div>

    <div class="form-group">
      <label for="image" class="form-label mt-4">Insert Image</label>
      <input class="form-control" type="file" name="fimage" id="fimage" required>
    </div>

    <br><br>

    <button type="submit" class="btn btn-primary">Add Vehicle</button>
    <button type="reset" class="btn btn-warning">Clear</button>

</fieldset>

</form>


</div>
<?php include 'footer.php'; ?>
<br><br><br><br><br>