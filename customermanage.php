<?php 
include 'cbssession.php';
include 'dbconnect.php';
if (!session_id()) {
    session_start();
}
include 'headercustomer.php';

$uid = $_SESSION['uid'];

// Retrieve individual Bookings
$sql = "SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
        LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
        WHERE b_customer = '$uid'";
$result = mysqli_query($con, $sql);
?>

<html>
<head>
    <style>
        .container {
            margin-top: 20px;
        }
        
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        
        .table thead th {
            background-color: #333;
            color: #fff;
        }
        
        .btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        
        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }
        
        .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <h3>Your Booking List</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Booking ID</th>
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
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['b_id'] . '</td>';
                        echo '<td>' . $row['v_model'] . '</td>';
                        echo '<td>' . $row['b_pickupdate'] . '</td>';
                        echo '<td>' . $row['b_returndate'] . '</td>';
                        echo '<td>' . $row['b_totalprice'] . '</td>';
                        echo '<td>' . $row['s_desc'] . '</td>';
                        echo '<td>';
                        echo '<div class="btn-group">';
                        echo '<a href="javascript:void(0);" class="btn btn-warning btn-sm" onclick="if(confirm(\'Are you sure you want to cancel this booking?\')) window.location.href = \'customercancel.php?id=' . $row['b_id'] . '\';">Cancel</a>';
                        echo '</div>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>