<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO ONLINE CAR RESERVATION!</title>
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

        .title {
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .footerelement {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
        }

        img {
            display: grid;
            grid-template-columns: auto auto auto;
            width: 200;
            height: 100;
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
        }
    </style>
</head>

<body>
    <header>
        <h1 class="compname">Car2Go Co. <span id="datetime"></span></h1>
    </header>
    <nav>
        <div class="navbar">
            <a href="FinalProject.php">Home</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Login</a>
            <a href="Booking.php">Bookings</a>
            <div class="dropdown">
                <button class="dropbtn">Categories
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div>
            <img src="img/tesla.png">
        </div>
        <div>
            <img src="img/merc.jpeg">
        </div>
        <div>
            <img src="rangerover.jpg">
        </div>
    </section>
</body>

<footer>
<div class="footerelement">
  <p>Copyright © 2023 Car2Go</p>
</div>
</footer>

</html>