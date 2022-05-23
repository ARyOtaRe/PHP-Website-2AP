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
    <title>Gamer Times | History</title>
    <link rel="stylesheet" href="../Css/History.css">
    <link rel="icon" href="../Images/Favicon/History.ico" type="image/x-icon">
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
            <h2>Explore The Fascinating History of Gaming !</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Home.php"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== Topic Section 1 =========== -->

    <section class="events">

        <div class="titlee">
            <h1 id="top">The History Timeline</h1>
            <div class="line"></div>
        </div>
    
<!-- =========== TimeLine =========== -->

    <div class="wrapper">

        <div class="center-line">
            <a class="scroll-icon" onclick="topFunctionhistory()"><i class="fas fa-caret-up"></i></a>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-home"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img1'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1950 :</p>
                    <p class="description">Claude Shannon and Alan Turing create chess programs.</p>
                </div>
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-star"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img2'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1956 :</p>
                    <p class="description"> Arthur Samuel demonstrates his checkers computer program written on an IBM-701 on national television. Six years later, the program beats a checkers master.</p>
                </div>
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-book"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img3'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1958 :</p>
                    <p class="description">Willy Higinbotham creates an oscilloscope and analog computer tennis game for public demonstration at Brookhaven National Laboratory in 1985.</p>
                </div>
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-dice"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img4'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1962 :</p>
                    <p class="description">Steve Russell, an MIT student, invents SpaceWar, the first computer video game.</p>
                </div>            
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-leaf"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img5'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1966-1967 :</p>
                    <p class="description"> Ralph Baer "the father of video games" had imagined an electronic box attached to the television, sketch of a video game console and with the help of his colleague Bob Tremblay they gave birth to the first video game: "Chase Game" on the console: "Brown Box".</p>
                </div>
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-snowflake"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img6'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1972 :</p>
                    <p class="description">Nolan Bushnell and Atari's AL Alcorn have developed an arcade table tennis game. When they tested it at Andy Capps Tavern in Sunnyvale, it stopped working because people were playing it too much.</p>
                </div>            
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-medal"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img7'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1980 :</p>
                    <p class="description">A missing pizza slice inspires Namco's Toru Iwatani to make Pac-Man the best-selling arcade game of all time at the time.</p>
                </div>            
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-gamepad"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img8'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1981 :</p>
                    <p class="description">Nintendo releases Donkey Kong with the "Jumpman" character later known as "Mario".</p>
                </div>
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-graduation-cap"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img9'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1993 :</p>
                    <p class="description">Concerns over bloodshed in games like Mortal Kombat prompt US to create video game rating system.</p>
                </div>            
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-anchor"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img10'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">1995 :</p>
                    <p class="description">Sony released the PlayStation 100$ cheaper than the Sega Saturn, which weakened the Sega console market.</p>
                </div>            
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-candy-cane"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img11'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2001 :</p>
                    <p class="description">Microsoft enters the video game console market with Xbox and games like Halo: Combat Evolved.</p>
                </div>            
            </section>
        </div>
        
        <div class="row row-2">
            <section>
                <i class="icon fas fa-globe"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img12'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2003 :</p>
                    <p class="description">Valve energizes PC gaming with the release of Steam, the game distribution platform.</p>
                </div>            
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-globe"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img13'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2005 :</p>
                    <p class="description">Popular portable consoles PlayStation Portable (PSP) and Nintendo DS released.</p>
                </div>            
            </section>
        </div>

        <div class="row row-2">
            <section>
                <i class="icon fas fa-globe"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img14'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2010 :</p>
                    <p class="description">This year marks the release of the best-selling game of all time MINECRAFT.</p>
                </div>            
            </section>
        </div>

        <div class="row row-1">
            <section>
                <i class="icon fas fa-globe"></i>
                <div class="containerrrrrrr">
                    <div class='banner-img15'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2016 :</p>
                    <p class="description"> Players are looking for virtual creatures like Pikatchu and Horsea in the real world game Pokemon Go which represented a bright future for augmented reality games.</p>
                </div>            
            </section>
        </div>

        <div class="row row-2">
            <section>
                <div class="containerrrrrrr">
                    <div class='banner-img16'></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p class="name">2020 :</p>
                    <p class="description">Streaming platforms (Youtube Gaming-Twitch ..) explode in popularity in quarantine period when people were looking for ways to be entertained.</p>
                </div>            
            </section>
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
