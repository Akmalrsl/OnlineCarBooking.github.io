<!DOCTYPE html>
<html lang="en">

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
            border: 1px solid black;
        }

        img {
            height: 280px;
            width: 420px;
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
                border: 1px solid black;
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

        /*registration form styles*/
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .registration-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .registration-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .form-group #show-password {
            font-size: 12px;
            cursor: pointer;
            color: blue;
            margin-top: 5px;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }

        .form-actions .btn-primary {
            background-color: #007bff;
        }

        .form-actions .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-actions .bg-danger {
            background-color: #dc3545;
        }

        .form-actions .bg-danger:hover {
            background-color: #a71d2a;
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
    </div>
</nav>

    <div class="container">
        <div class="registration-form">

            <h2>LOG IN</h2>
            <p>Please log into your account to enjoy our service!</p>

            <form method="POST" action="loginprocess.php">

                <div class="form-group">
                    <label for="ic">IC Number:</label>
                    <input type="text" name="fic" id="ic" placeholder="Enter your valid IC number" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="fpwd" id="password" placeholder="Please create a strong password" required>
                    <span id="show-password" onclick="showPassword()">Click to Show</span>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" onclick="return validatePassword()">Submit</button>
                    <button type="reset" class="btn bg-danger">Clear Form</button>
                </div>
            </form>
        </div>
    </div>
</body>

<footer>
<div class="footerelement">
  <p>Copyright © 2023 Car2Go</p>
</div>
</footer>

</html>