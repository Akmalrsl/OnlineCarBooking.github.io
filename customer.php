<?php
include 'cbssession.php';
include 'dbconnect.php';

if (!session_id()) {
    session_start();
}

include 'headercustomer.php';

$sql1 = "SELECT * FROM tb_user WHERE u_id='$uid'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
?>

<html>
<head>
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-sm-6 {
            width: 50%;
        }

        .col-sm-6:nth-child(1) {
            order: 2;
        }

        .col-sm-6:nth-child(2) {
            order: 1;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-5 {
            margin-top: 1.25rem;
        }

        .my-5 {
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }

        .card {
            height: 100%;
        }

        .form-label {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .form-control {
            display: block;
            width: 60%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid lightgrey;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-select {
            display: block;
            width: 60%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid lightgrey;
            border-radius: 0.25rem;
            appearance: none;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        @media (max-width: 576px) {
            .col-sm-6 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<div class="container my-5">
    <div class="row">
        <div class="col-sm-6">
            <?php
            $sqlvec = "SELECT * FROM tb_vehicle";
            $resultvec = mysqli_query($con, $sqlvec);

            while ($row = mysqli_fetch_array($resultvec)) {
                echo "<div><img src='img/" . $row['v_image'] . "' width='200px'></div>";
                echo "<div>" . $row['v_type'] . "</div>";
                echo "<div>" . $row['v_model'] . "</div>";
                echo "<div>" . $row['v_year'] . "</div>";
                echo "<div>" . $row['v_reg'] . "</div>";
                echo "<div>" . $row['v_price'] . "</div>";
                echo "<br><br>";
            }
            ?>
        </div>
        <div class="col-sm-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="customerprocess.php">
                        <fieldset>
                            <h2 class="text-center">Booking Form</h2>
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-label mt-2">Select Vehicle</label>
                                <?php
                                $sql = "SELECT * FROM tb_vehicle";
                                $result = mysqli_query($con, $sql);
                                echo '<select class="form-select" name="fvec" id="exampleSelect1">';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value='" . $row['v_reg'] . "'>" . $row['v_model'] . " " . $row['v_reg'] . "</option>";
                                }
                                echo ' </select>';
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2">Pick up Date</label>
                                <input type="date" name="fpdate" class="form-control" id="fpdate" placeholder="Enter Pick up Date" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label mt-2">Return Date</label>
                                <input type="date" name="frdate" class="form-control" id="frdate" placeholder="Enter Return Date" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4" onclick="return validateForm() && confirm('Please verify the details of the booking you want to choose')">Book</button>
                            <button type="reset" class="btn btn-danger mt-4">Clear Form</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var fpdate = document.getElementById("fpdate").value;
        var frdate = document.getElementById("frdate").value;

        if (frdate < fpdate) {
            alert("Return date cannot be earlier than pickup date!");
            return false;
        }

        return true;
    }
</script>

</body>
</html>

<?php include 'footer.php'; ?>
