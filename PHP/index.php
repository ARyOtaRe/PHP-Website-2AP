<?php
include "config.php";


// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Times - Entrance</title>
    <link rel="stylesheet" href="../Css/HeaderEntrance.css">
    <link rel="icon" href="../Images/Favicon/Entrance.ico" type="image/x-icon">
</head>
<body>

    <nav class="navbar">
        <ul class="nav-links">
            <li style="font-size: 50px;" class="nav-item"><a href="Home.html"><i class="fas fa-gamepad"></i> <span1>Gamer </span1><span2>Times</span2></a></li>
            <li class="nav-item"><a href="Home.html">Home</a></li>
            <li class="nav-item"><a href="NewsMain.html">News</a></li>
            <li class="nav-item"><a href="History.html">History</a></li>
            <li class="nav-item"><a href="Fun Facts.html">Fun Facts</a></li>
            <li class="nav-item"><a href="Quotes.html">Quotes</a></li>
            <li class="nav-item"><a href="Contact_us.html">Contact us</a></li>
        </ul>
    </nav>
    <div class="container">
<br><br><br><br>
        <div class="row">

            <div class="col">
                <h1>Gamer <span>Times</span></h1>
                <p>Gaming News, Gaming Quotes, Gaming History and more... ALL IN ONE PLACE !!</p>
                <a href="Home.html"><button type="button">Explore</button></a>
            </div>

            <div class="col">

                <a href="NewsMain.html">
                    <div class="card card1">
                        <h5>News</h5>
                    </div>
                </a>

                <a href="History.html">
                    <div class="card card2">
                        <h5>History</h5>
                    </div>
                </a>

                <a href="Fun Facts.html">
                    <div class="card card3">
                        <h5>Fun Facts</h5>
                    </div>
                </a>


                <a href="Quotes.html">
                    <div class="card card4">
                        <h5>Quotes</h5>
                    </div>
                </a>

            </div>

        </div>

    </div>


</body>
</html>