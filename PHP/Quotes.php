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
    <title>Gamer Times | Quotes</title>
    <link rel="stylesheet" href="../Css/Quotes.css">
    <link rel="icon" href="../Images/Favicon/Quotes.ico" type="image/x-icon">
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
            <h2>Explore Some Interesting Quotes by Video Games' Characters</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Quotes.php"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== Topic Section 1 =========== -->

    <section class="events">

        <div class="title">
            <h1>Quotes</h1>
            <div class="line"></div>
        </div>


        <div class="wrapper-grid">
            <div class="containerrrrrr">
                <div class="card14">
                    <img src="../Images/Quotes/Assassin.jpg">
                    <div class="info14">
                        <center>
                        <h1> Ezio – Assassin’s Creed 2</h1>
                        <p>"Wanting something does not give you the right to have it."</p>
                        </center>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card2">
                    <img src="../Images/Quotes/Lara2.jpg">
                    <div class="info2" id="lara1">
                        <h1>Lara Croft – Tomb Raider</h1>
                        <p>"The world is full of unanswered questions beyond all limits or reason... the answers await."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card3">
                    <img src="../Images/Quotes/Wukong1.jpg">
                    <div class="info3">
                        <h1>Wukong – League of Legends</h1>
                        <p>"Every mistake is a lesson."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card4">
                    <img src="../Images/Quotes/Irelia1.jpg">
                    <div class="info4">
                        <h1>Irelia – League of Legends</h1>
                        <p>"Never stop learning. There's always a form you don't know."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card5">
                    <img src="../Images/Quotes/Yi.jpg">
                    <div class="info5">
                        <h1>Master Yi – League of Legends</h1>
                        <p>"The focused mind can pierce through stone."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card6">
                    <img src="../Images/Quotes/Fighter.jpg">
                    <div class="info6">
                        <h1>Gouken – Super Street Fighter IV</h1>
                        <p> "We are all our own worst enemy. But also, our best teacher."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card7">
                    <img src="../Images/Quotes/Lara3.jpg">
                    <div class="info7">
                        <h1>Lara Croft – Tomb Raider</h1>
                        <p>"A famous explorer once said that the extraordinary is in what we do, not who we are."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card8">
                    <img src="../Images/Quotes/FarCry3.jpg">
                    <div class="info8">
                        <h1>Vaas – Far Cry 3</h1>
                        <p>"Insanity is doing the exact same thing over and over again, expecting things to change."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card9">
                    <img src="../Images/Quotes/Gman.jpg">
                    <div class="info9">
                        <h1>G-man – Half Life 2</h1>
                        <p>"The right man in the wrong place can make all the difference in the world."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card10">
                    <img src="../Images/Quotes/Tidus.jpg">
                    <div class="info10">
                        <h1>Tidus – Final Fantasy X</h1>
                        <p>"No matter how dark the night, the morning always comes."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card11">
                    <img src="../Images/Quotes/Kratos.jpg">
                    <div class="info11">
                        <h1>Kratos – God of War</h1>
                        <p>"Don't be sorry, Be Better."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card12">
                    <img src="../Images/Quotes/Martson.jpg">
                    <div class="info12">
                        <h1>John Martson – Red Dead Redemption</h1>
                        <p>"If you find yourself in a hole, the first thing to do is stop digging."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card1">
                    <img src="../Images/Quotes/Lara1.jpg">
                    <div class="info1">
                        <h1>Lara Croft – Tomb Raider</h1>
                        <p>"In our darkest moments, when life flashes before us, we find something; Something that keeps us going. Something that pushes us."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card15">
                    <img src="../Images/Quotes/Frank.jpg">
                    <div class="info15">
                        <h1> Frank Coleridge – Silent Hill : Downpour</h1>
                        <p>"You can’t undo what you’ve already done, but you can face up to it."</p>
                    </div>
                </div>
            </div>

            <div class="containerrrrrrr">
                <div class="card13">
                    <img src="../Images/Quotes/Andrew.jpg">
                    <div class="info13">
                        <h1> Andrew Ryan – Bioshock</h1>
                        <p>"We all make choices in life, but in the end our choices make us."</p>
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
