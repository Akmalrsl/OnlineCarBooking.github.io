<?php 
include 'cbssession.php';

include ('dbconnect.php');
if (!session_id())
{
	session_start();
}
include 'headerstaff.php';

//Retrieve individual Bookings
$sql = "SELECT * FROM tb_vehicle ";

$result = mysqli_query($con,$sql);

?>

<style>
.container {
  margin: 20px auto;
  width: 80%;
}

h3 {
  text-align: center;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.table th,
.table td {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: center;
}

.table th {
  background-color: #f2f2f2;
}

.table img {
  max-width: 200px;
  height: auto;
}

.btn {
  display: inline-block;
  padding: 8px 12px;
  border: none;
  border-radius: 4px;
  text-decoration: none;
  background-color: #fca311;
  color: #fff;
  cursor: pointer;
}

.btn:hover {
  background-color: #ff8303;
}

</style>


<div class ="container">
	<br><h3>Car List</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Car Registration Number</th>
      <th scope="col">Type of Car</th>
      <th scope="col">Model of Car</th>
      <th scope="col">Year</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Operation</th>
    </tr>

  </thead>
  <tbody>
      <?php
           while($row=mysqli_fetch_array($result))
           {

            echo '<tr>';
            echo "<td>".$row["v_reg"]."</td>";
            echo "<td>".$row["v_type"]."</td>";
            echo "<td>".$row["v_model"]."</td>";
            echo "<td>".$row["v_year"]."</td>";
            echo "<td>".$row["v_price"]."</td>";
            echo "<td><img src='img/".$row['v_image']."' width='200px'></td>";;
            echo "<td>";
                echo "<a href='#' onclick='return confirmDelete(\"".$row['v_reg']."\")' class='btn btn-warning'>Delete</a>";
            echo "</td>";
            echo '</tr>';
           }
           

?>
    
  </tbody>
</table>
</div>

<?php include 'footer.php'; ?>