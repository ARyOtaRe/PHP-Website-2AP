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
    <title>Gamer Times | Fun Facts</title>
    <link rel="stylesheet" href="../Css/Funfacts.css">
    <link rel="icon" href="../Images/Favicon/FunFact.ico" type="image/x-icon">
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
            <h2>Explore The Funniest Facts About Gaming !</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="Home.php"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== Topic Section 1 =========== -->

<section class="events">

    <div class="title">
        <h1>Fun Facts</h1>
        <div class="line"></div>
    </div>


    <div class="wrapper">

<!-- ***** Card 1 : Assassin's creed ***** -->
        <div class="card1">
            <img src="../Images/Fun Facts/assassin.jpg">
            <div class="info1">
                <h1>Assassin’s Creed was a Prince of Persia Spinoff :</h1> <br> <br>
                <p>"The famous Assassin's Creed series from Ubisoft was initially a spinoff of the Prince of Persia. Furthermore, during its early design and thought, the game developers initially referred to it as Prince of Persia: Assassins. Originally, the story centered on a female assassin tasked with protecting Jerusalem’s Prince. However, Ubisoft turned the offer down as the story didn’t focus more on the Prince.."</p>
            </div>
        </div>


<!-- ***** Card 2 : Minecraft ***** -->
        <div class="card2">
            <img src="../Images/Fun Facts/Minecraft.jpg">
            <div class="info2" id="lara1">
                <h1>Minecraft is the Best-Selling Game Ever :</h1> <br> <br>
                <p>Minecraft is currently the best-selling game ever. Its creator Marcus Alexej Persson (a.k.a Notch), recorded over $180 million in sales. It also remains the most played game across all platforms.
                </p> <br> <br>
            </div>
        </div>


<!-- ***** Card 3 : Gameboy ***** -->
        <div class="card3">
            <img src="../Images/Fun Facts/GameBoy.jpg">
            <div class="info3">
                <h1>The Gameboy was the First Game in Space :</h1> <br> <br>
                <p>In 1993, the Gameboy’s Tetris was the first-ever game played in space. It came aboard the Soyuz TM-17 rocket meeting the MIR Space Station. Russian cosmonaut Serebrov A. Aleksandr was the first to play it.
                </p>
            </div>
        </div>


<!-- ***** Card 4 : PS2 ***** -->
        <div class="card4">
            <img src="../Images/Fun Facts/ps2.jpg">
            <div class="info4">
                <h1>PlayStation 2 is the Best-Selling Game Console : </h1> <br> <br>
                <p>The PlayStation 2 game console is the best-selling of all time! At the last recorded sales of 2012, it reached a total of $155 million. By now, it should have superseded that number.
                </p>
            </div>
        </div>


<!-- ***** Card 5 : Atari26***** -->
        <div class="card5">
            <img src="../Images/Fun Facts/atari26.jpg">
            <div class="info5">
                <h1>Atari 26 was the First-Ever Console to Have an RPG : </h1> <br> <br>
                <p>In 1982, Dragonstomper for Atari 2600 was the first-ever role-playing game. Although it didn’t get much fame, critics applauded it for its ingenuity, detailing, and depth.
                </p>
            </div>
        </div>


<!-- ***** Card 6 : 2Billion on arcade ***** -->
        <div class="card6">
            <img src="../Images/Fun Facts/arcade2B.jpg">
            <div class="info6">
                <h1>Americans Spent $2 billion on Arcade Games: </h1> <br> <br>
                <p> Americans' obsession with video games peaked in 1981 – with Time Magazine reports stating they spent a whopping sum of $20 billion on arcade games alone. And that’s twice the income of casino pokies and lovers in Nevada.
                </p>
            </div>
        </div>


<!-- ***** Card 7 : Yongest gamer ***** -->
        <div class="card7">
            <img src="../Images/Fun Facts/Yongestgamer.png">
            <div class="info7">
                <h1>The Youngest Professional Gamer was 11 : </h1> <br> <br>
                <p>Victor De Leon III, famously known as Lil Poison, is the World’s youngest professional video gamer of all time at 11 years. He got the status after signing an exclusive deal with a game company, Major League Gaming.
                </p> <br><br> <br>
            </div>
        </div>


<!-- ***** Card 8 : anime wife ***** -->
        <div class="card8">
            <img src="../Images/Fun Facts/Animewife.jpg">
            <div class="info8">
                <h1>A Japanese Man Married a Video Game Character : </h1> <br> <br>
                <p>In 2009, a Japanese man (27 years old) took his love for video games to a whole new level. He married the video game character Nene Anegasaki (of Love Plus - Nintendo DS) over a Livestream – becoming the first- known gamer to do that.
                </p>
            </div>
        </div>


<!-- ***** Card 9 : Half Life 2 ***** -->
        <div class="card9">
            <img src="../Images/Fun Facts/mario 2.jpg">
            <div class="info9">
                <h1>Mario’s Last Name is Mario : </h1> <br> <br>
                <p>Some would believe Mario doesn't have the last name; however, he does. Since they are both tagged as the “Mario Bros,” it is fair to assume they are Luigi Mario and Mario Mario.
                </p> <br><br>
            </div>
        </div>


<!-- ***** Card 10 : Longest gaming session ***** -->
        <div class="card10">
            <img src="../Images/Fun Facts/138hours.jpg">
            <div class="info10">
                <h1>The longest Gaming Session is about 138 hours : </h1> <br> <br>
                <p>In 2015, from July 11 – 17, Carrie Swidecki from the U.S. created a world record for playing video games. Carrie played Just Dance in a gaming session lasting 138 hours and 34 seconds in Bakersfield, California, at Otto’s Video Games.
                </p>
            </div>
        </div>


<!-- ***** Card 11 : Rubik's cube ***** -->
        <div class="card11">
            <img src="../Images/Fun Facts/rubik.jpg">
            <div class="info11">
                <h1>It took Rubik a month to solve his cube : </h1> <br> <br>
                <p>You’ve probably heard of Erno Rubik. But most people don’t know that he created the Rubik’s Cube by accident. A professor of architecture, Rubik built a twistable box with colorful rows of labels on each side to see if it was possible to design blocks that could move without causing the entire structure to collapse. After Rubik rotated a few rows and mixed up the colors, his challenge began: Realign the hues. It took him about a month to restore the cube to its pristine condition.
                </p>
            </div>
        </div>


<!-- ***** Card 12 : Doctors ***** -->
        <div class="card12">
            <img src="../Images/Fun Facts/Doctors.jpg">
            <div class="info12">
                <h1>Video games sharpen doctors’ skills : </h1> <br> <br>
                <p>Doctors who perform laparoscopic surgery—which involves inserting a tiny camera into a patient’s body through a small incision—have better coordination if they play video games at least three hours per week. According to a 2003 study, gamer surgeons made 37 percent fewer errors and worked 27 percent faster than those whose only “video game” experience was the surgery itself.
                </p>
            </div>
        </div>


<!-- ***** Card 13 : Tetris ***** -->
<!--        <div class="card13">
            <img src="../Images/Fun Facts/tetris.jpg">
            <div class="info13">
                <h1>Tetris reduces trauma</h1> <br> <br>
                <p>Tetris, the Nintendo Game Boy classic, might cure insomnia! In 2009, researchers determined that Tetris inhibited painful flashbacks when they exposed three groups of people to a 21-minute video showing traumatic events. Members of the group that played Tetris for ten minutes post-viewing had fewer flashbacks about the events in the video than those in the other groups who were asked to either do nothing or take a quiz. Why? Because playing the game engages a part of the brain responsible for storing memories. Try your hand at Tetris up to six hours after a traumatic event for fewer nightmares.
                </p>
            </div>
        </div>                           -->


<!-- ***** Card 14 : Language ***** -->
        <div class="card14">
            <img src="../Images/Fun Facts/language.webp">
            <div class="info14">
                <h1>Games are great for language gains :</h1> <br> <br>
                <p>
                    Research showed that a game doesn't have to be language oriented for language acquisition.
                </p> <br> <br> <br> <br> <br> <br>
            </div>
        </div>


<!-- ***** Card 15 : Mental health ***** -->
        <div class="card15">
            <img src="../Images/Fun Facts/mentalhealth.jpg">
            <div class="info15">
                <h1>Despite popular opinions, games promote learning and discourage negative behaviors :</h1> <br> <br>
                <p>A study illustrated that regular gameplay improved mental health as well as cognitive and social skills.</p>
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
