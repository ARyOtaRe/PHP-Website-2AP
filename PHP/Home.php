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
    <title>Gamer Times | Home</title>
    <link rel="stylesheet" href="../Css/Pagecss.css">
    <link rel="icon" href="../Images/Favicon/Home.ico" type="image/x-icon">
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
    <button  onclick="topFunction()" id="myBtn" title="Go to the top"><img src="../Images/top1.png" width="30" height="30" /></button>

<!-- =========== Header =========== -->

    <header>
        <div class="header-content">
            <h2>Explore The Wonderful World Of Gaming !</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Home.php"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== Topic Section 1 =========== -->

    <section class="events">

        <div class="title">
            <h1>Upcoming Topics</h1>
            <div class="line"></div>
        </div>

        <div class="row">

            <!-- == Image 1 == -->
            <a href="NewsMain.php">
            <div class="col">
                <a href="NewsMain.php"><img src="../Images/Home/NewsBg.jpg"></a>
                <h4>Gaming News</h4>
                <p>Explore the newest news about the gaming industry.</p>
                <a href="NewsMain.php" class="ctn">Learn More</a>
            </div>
            </a>
            <!-- == Image 2 == -->
            <a href="History.php">
            <div class="col">
                <a href="History.php"><img src="../Images/Home/HistoryBg.jpg"></a>
                <h4>Gaming History</h4>
                <p>Explore how we went from the gameboy to the pc gamer.</p>
                <a href="History.php" class="ctn">Learn More</a>
            </div>
            </a>

        </div>

    </section>

<!-- =========== Topic Section 2 =========== -->

    <section class="explore">
        <div class="explore-content">
            <h1>Enjoy Reading The Funniest Facts About Gaming !</h1>
            <div class="line"></div>
            <p>Explore The Funniest Facts About Gaming.</p>
            <a href="Fun Facts.php" class="ctn">Learn More</a>
        </div>
    </section>

<!-- =========== Topic Section 3 =========== -->

    <section class="tours">
        <div class="row">

            <div class="col content-col">
                <h1>Dive Into The Gaming World</h1>
                <div class="line"></div>
                <p>Explore Some ICONIC quotes said by video games' characters.</p>
                <a href="Quotes.php" class="ctn">Learn More</a>
            </div>
                
            <!-- == Image Gallery 1 == -->
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="../Images/Home/Lara1.jpg">
                    <img src="../Images/Home/Wukong1.jpg">
                </div>
            </div>

            <!-- == Image Gallery 2 == -->
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="../Images/Home/Irelia1.jpg">
                    <img src="../Images/Home/Akali1.jpg">
                </div>
            </div>

        </div>
    </section>

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
