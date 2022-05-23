<?php
include "..\\config.php";


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
    <title>Gamer Times | News</title>
    <link rel="stylesheet" href="../Css/NewsMain.css">
    <link rel="icon" href="../Images/Favicon/News.ico" type="image/x-icon">
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
    </ul>

</nav>
<button  onclick="topFunction()" id="myBtn" title="Go to the top"><img src="../Images/top1.png" width="30" height="30" /></button>

<!-- =========== Header =========== -->

    <header>
        <div class="header-content">
            <h2 id="h2">Explore The Latest News About the Gaming Industry !</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Home.php"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== News Title =========== -->

    <section class="events">
        <div class="title">
            <h1>Upcoming News</h1>
            <div class="line"></div>
        </div>

<!-- =========== News cards =========== -->

    <div id="blog">
        <div class="blog-container">
            
<!-- ===== News 1 : Minecraft ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Minecraft.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Minecraft</span>
                <a href="" class="blog-title">Minecraft Fan Creates Realistic Water for the Game</a>
                <p>
                    One dedicated Minecraft fan produces a simulation of what the game would look 
                    like with realistic rushing water, and it's impressive.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 2 : GTA 5 ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Gta5.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Grand Theft Auto 5</span>
                <a href="" class="blog-title">Grand Theft Auto 5 Was the Most-Watched Game on Twitch This Year</a>
                <p>
                    Although League of Legends typically remains Twitch's most-watched game of the year, Grand 
                    Theft Auto 5 has taken the crown for 2021.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 3 : Battlefield ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Battlefield.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Battlefield V</span>
                <a href="" class="blog-title">Battlefield V Currently Has More Steam Players Than Battlefield 2042</a>
                <p>
                    Battlefield 2042 is just a little over a month old at this point, yet it 
                    already has less active players on Steam than an older game in the series.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 4 : Rockstar Games ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Rockstar.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Rockstar Games</span>
                <a href="" class="blog-title">All the Free Games Rockstar Games is Giving Away Right Now and How to Get One</a>
                <p>
                    For a limited time, Rockstar Games is giving away some of the best games in 
                    its catalog for free to all owners of the remastered GTA Trilogy.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 5 :Genshin Impact ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Genshin.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Genshin Impact</span>
                <a href="" class="blog-title">Genshin Impact 2.4 Leak Reveals New Ningguang Skin</a>
                <p>
                    A recent Genshin Impact leak apparently reveals one of the upcoming skins for Ningguang that will
                    arrive during the Lantern Rite event.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 6 : Harry Potter ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Harry.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Harry Potter</span>
                <a href="" class="blog-title">Harry Potter MMO Was In Development at EA But Was Canceled</a>
                <p>
                    A former EA marketing director reveals that the company had gotten pretty far into 
                    making a Harry Potter MMO before ultimately canceling it.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 7 : Overwatch ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Overwatch.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Overwatch</span>
                <a href="" class="blog-title">Overwatch is Free to Play for Limited Time</a>
                <p>
                    Blizzard's critically-acclaimed hero shooter Overwatch is free to play 
                    for a limited time, with players able to check out the Winter Wonderland event.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

<!-- ===== News 8 : Assassin ===== -->

        <div class="blog-box">
            <div class="blog-img">
                <img src="../Images/News/Assassin.jpg">
            </div>

            <div class="blog-text">
                <span>24/12/2021 / Assassin’s Creed 4</span>
                <a href="" class="blog-title">Assassin's Creed 4: Black Flag Speedrunner Beats Game Without Taking Damage</a>
                <p>
                    An Assassin's Creed 4: Black Flag speedrunner becomes the first player to complete the game full 
                    synchronization without taking any damage.
                </p>
                <a href="">Read More</a>
            </div>
        </div>

    </div>
</div>
</section>

<!-- =========== Footer =========== -->    

<section class="footer">
    <p>Gamer Times</p>
    <p>© 2022 Gamer Times | Copyright | All right reserved.</p>
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
</section>
    
</body>
</html>
