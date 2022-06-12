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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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
            <h2>Explore Some Interesting Quotes by Video Games' Characters</h2>
            <div class="line"></div>
            <h1>Gamer Times</h1>
            <a href="#Quotes_section"><button>Explore</button></a>
        </div>
    </header>

<!-- =========== Topic Section 1 =========== -->

    <section class="events">

        <div class="title" id="Quotes_section">
            <h1>Quotes</h1>
            <div class="line"></div>
        </div>


        <div class="wrapper-grid">

            <?php
                $sql = "SELECT id, image, name, quote FROM quotes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="containerrrrrrr">
                                <div class="card'. $row['id'].'">
                                    <img src="'. $row['image']. '">
                                    <div class="info'.$row['id'].'">
                                        <h1>'.$row["name"].'<h1>
                                        <p>'.$row["quote"].'</p>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
            

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
