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

        .mainpic {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mainpic img{
            height: 500px;
            width: 900px;
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
            <a href="FinalProject.php">Home</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Login</a>
        </div>
    </nav>

    <section>
        <h2 class="title">Find your desired cars in Korea!</h2>
    </section>

    <section>
        <div class="mainpic">
            <img src="img/gambar3.jpg">
        </div>
    </section>

    </section>
    <br>
    <section>
        <div>
            <h2>Korea Car Rental Service</h2>
            <p>The pick-up location, chosen automobile brand, and return date can all be customized for the convenience of the traveler. It is advisable for foreign tourists to have the appropriate driving license on hand because the international driving license is recognized in Korea. The majority of automobile rental businesses are situated close to popular tourist destinations like airports and congested urban regions.</p>
        </div>
        <div>
            <h2>Popular Car Rental Locations in Korea</h2>
            <p>Korea offers car rental services, and customers can pick up their reserved vehicles practically anywhere and use them as they like throughout the reserved time. The majority of travelers would want to pick up their leased car as soon as they arrive at the airport. Prior to your travel, be sure to make a reservation for an airport vehicle rental service on our website.
                Major towns and cities are typically home to some of Korea's most well-known automobile rental locations.</p>
        </div>
        <div>
            <h2>Rent Car in Malaysia With Car2Go</h2>
            <p>Anyone can travel within Korea without problem with the high-end to low-cost car rental service we offer with a variety of car rental rates thanks to the large range of vehicles available for hire. The cars on our website can be chosen by travelers based on their tastes, budget, and group size. Rent a car on our website right away to get started organizing a fun road trip to Korea!</p>
        </div>
    </section>

    <br>
    <section class="objects">
        <div>
            <img src="img/calend.jpg">
            <h2>Flexible Rentals</h2>
            <p>Cancel or change most bookings for free up to 48 hours before pick-up</p>
        </div>
        <div>
            <img src="img/magnifyingglass.jpg">
            <h2>No Hidden Fees</h2>
            <p>Know exactly what you are paying</p>
        </div>
        <div>
            <img src="img/locks.jpg">
            <h2>Price Match Guarantee</h2>
            <p>Found the same deal for less? We will match the price</p>
        </div>

    <script>
        function realTimeDate() {
            var datetime = document.getElementById('datetime');
            var currentDate = new Date();
            var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
            var format = currentDate.toLocaleString(undefined, options);
            datetime.textContent = format;
        }

        setInterval(realTimeDate, 1000);
    </script>


</body>

</html>

<?php include 'footer.php'; ?>