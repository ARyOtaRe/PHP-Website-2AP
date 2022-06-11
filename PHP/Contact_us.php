<?php
include "Config.php";


// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: ..\\index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ..\\index.php');
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Times | Contact us</title>
    <link rel="stylesheet" href="../Css/Contact_us.css">
    <link rel="icon" href="../Images/Favicon/Contact_us.ico" type="image/x-icon">
    <script src='../Javascript/script.js'></script>
</head>

<body onload="fromthetop()">

    <!-- =========== Nav Links =========== -->

    <nav class="navbar">
        <ul class="nav-links">
            <li style="font-size: 50px;" class="nav-item"><a href="Home.php"><i class="fas fa-gamepad"></i> <span1>Gamer </span1><span2>Times</span2></a></li>
            <li class="nav-item"><a href="Home.php">Home</a></li>
            <li class="nav-item"><a href="NewsMain.php">News</a></li>
            <li class="nav-item"><a href="History.php">History</a></li>
            <li class="nav-item"><a href="Fun Facts.php">Fun Facts</a></li>
            <li class="nav-item"><a href="Quotes.php">Quotes</a></li>
            <li class="nav-item"><a href="Contact_us.php">Contact us</a></li>
            <?php
        if($_SESSION['uname'] == "admin"||$_SESSION['uname'] == "jeandosantos"){
            echo '<li class="nav-item"><a href="Admin.php">Admin page</a></li>';
        }
        ?>
        </ul>

    </nav>
    <button onclick="topFunction()" id="myBtn" title="Go to the top"><img src="../Images/top1.png" width="30" height="30" /></button>

    <!-- =========== Background =========== -->

    <header>
        <div class="header-content">
            <h2 id="h2">Contact us</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Feedback.php">
                <button>Feedback</button>
            <a>
            
        </div>

    </header>

<!-- =========== Footer =========== --> 

<section class="footer">
        <p>Gamer Times</p>
        <p>© 2022 Gamer Times | Copyright | All right reserved.</p>
        <form method='post' action="">
            <button name="but_logout">Logout</button>
            <a href="Register.php"><button>Register</button></a>
        </form>
    </section>

</body>

</html>