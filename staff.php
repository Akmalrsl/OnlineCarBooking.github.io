<?php 
include'cbssession.php';
include ('dbconnect.php');
if (!session_id())
{
	session_start();
}
include 'headerstaff.php';

$uid = $_SESSION['uid'];

//Retrieve individual Bookings
$sql = "SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
        LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
        LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id
        WHERE b_status= '1'";
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

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
    }
</style>


<div class ="container">
	<br><h3>New Booking List</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Booking ID</th>
      <th scope="col">Customer</th>
      <th scope="col">Vehicle</th>
      <th scope="col">Pick-up Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Operation</th>
    </tr>

  </thead>
  <tbody>
      <?php
           while($row=mysqli_fetch_array($result))
           {

            echo '<tr>';
            echo "<td>".$row["b_id"]."</td>";
             echo "<td>".$row["u_name"]."</td>";
            echo "<td>".$row["v_model"]."</td>";
            echo "<td>".$row["b_pickupdate"]."</td>";
            echo "<td>".$row["b_returndate"]."</td>";
            echo "<td>".$row["b_totalprice"]."</td>";
            echo "<td>".$row["s_desc"]."</td>";
            echo "<td>";
                echo "<a href= 'staffapproval.php?id=".$row['b_id']." 'class = 'btn btn-warning'>Approval</a>";
               
            echo "</td>";
            echo '</tr>';
 

           }

?>
    
  </tbody>
</table>
</div>

<?php include 'footer.php'; ?>