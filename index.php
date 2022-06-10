<?php
include "PHP\\Config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: PHP\\Home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Times | Home</title>
    <link rel="stylesheet" href="files/Css/Pagecss.css">
    <link rel="icon" href="../Images/Favicon/Home.ico" type="image/x-icon">
    <script src='Javascript/script.js'></script>
</head>

<body onload="fromthetop()">
<header>

        <div class="header-content">
            <center>
        
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>
                <div>
                    <input type="txt" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>
</center>
        </div>
    
    
        </header>
    </body>
</html>

