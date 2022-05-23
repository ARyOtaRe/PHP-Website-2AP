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
    <title>Gamer Times | Feedback Form</title>
    <link rel="stylesheet" href="../Css/Contact_us.css">
    <link rel="icon" href="../Images/Favicon/Contact_us.ico" type="image/x-icon">
    <script src='../Javascript/script.js'></script>
    <script src='../Javascript/jspdf.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
    <button onclick="topFunction()" id="myBtn" title="Go to the top"><img src="../Images/top1.png" width="30" height="30" /></button>

    <!-- =========== Background =========== -->
<header id="target">
    <div id="content">
<center>
    <div class="header-content">
                <form name="inscription" method="post" action="Feedback.php">
                    </br>
                    <h2 id="h2">Give us your feedback!</h2>
                    </br>
                    What's your favourite gaming platform? <input type="text" name="favplatform" />
                    <br/> How many hours/week do you play video games
                    <select name="hperw">
                            <option value="1h">1h</option>
                            <option value="1-5h">1-5h</option>
                            <option value="5-10h">5-10h</option>
                            <option value="10-20h">10-20h</option>
                            <option value="more than20 hours">more than 20h</option>
                        </select>
                    <br/> Do you mainly play with friends?
                    <select name="friends">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    <br/> What's your favourite type of video games? <input type="text" name="favgame" />
                    <br/> Why do you play video games? (minimum 200 words) <input type="text" name="why" /> <br/>
                    <button type="submit" name="valider">OK</button>
                </form>
                </br>
                <button type="button" id="jspdf"> I want a copy of my answers </button>
                <a href="..\email\email.php">
                <button type="button" id="emiel"> I want to contact you by email</button>
                </a>
            </div>
            </center>
            </div>
            </header>

            <section class="footer">
        <p>Gamer Times</p>
        <p>© 2022 Gamer Times | Copyright | All right reserved.</p>
        <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
        </form>
    </section>

</body>

</html>