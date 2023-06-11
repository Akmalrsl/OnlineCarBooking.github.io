<?php 
if (!isset($_SESSION)) {
    session_start();
}

$uid = $_SESSION['uid'];
$sql = "SELECT * FROM tb_user WHERE u_id = '$uid'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if($row['u_type'] == 1)
{
  header('location: index.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: orange;
            margin: 0;
        }

        .compname {
            background-color: #333;
            padding: 20px;
            font-style: italic;
            color: orange;
            margin: 0;
            margin-bottom: 1px;
            display: flex;
            justify-content: space-between;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            margin: 0;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        #datetime {
            float: right;
            color: white;
            font-size: 16px;
        }

        .title {
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .objects {
            display: flex;
            justify-content: space-between;
        }

        .objects div {
            flex: 1;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            padding: 0;
            border: 0;
        }

        img {
            height: 280px;
            width: 420px;
        }

        @media only screen and (max-width: 1280px) {
            .compname {
                text-align: center;
                justify-content: space-between;
            }

            .compname h1 {
                margin: 0;
                font-size: 18px;
                flex: 1;
            }

            #datetime{
                float: right;
            }

            .navbar {
                text-align: center;
            }

            .navbar a {
                display: block;
                font-size: 14px;
                padding: 10px;
            }

            .dropdown .dropbtn {
                padding: 10px;
            }

            .dropdown-content {
                min-width: 120px;
            }

            .objects {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 20px;
                padding: 20px;
            }

            .objects div {
                flex-basis: 33%;
                text-align: center;
                font-weight: bold;
                font-size: 20px;
                padding: 0;
                border: 0;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }

            img {
                max-width: 100%;
                height: auto;
            }
        }
</style>
</head>
<body>

<header>
        <h1 class="compname">Car2Go Co. <span id="datetime"></span></h1>
    </header>
  
    <nav>
        <div class="navbar">
            <a href="customer.php">Booking</a>
            <a href="customermanage.php">View Booking</a>
            <a href="Logout.php">Logout</a>
        </div>
    </nav>
</body>