<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html>
    <head>
        <title>Homepage</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="test/javascript" src="script.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <p><b>Add new user</b></p>
            <form name="resolution" method="post" action="register.php">
                <div>Type your username: <input id="input_add_user" type="text" name="txt_uname" placeholder="Username"/></br></div>
                <div>Type your name: <input id="input_add_user" type="text" name="txt_name" placeholder="Name"/></br></div>
                <div>Type your password: <input id="input_add_user" type="text" name="txt_pwd" placeholder="Password"/></br></div>
                <input type="submit" name="valider" value="OK"/></br>
                <a href="home.php">
                <input value="Back"/>
                </a>
            </form>
            <?php
                
                    if(isset($_POST['valider'])){
                        $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
                        $name=mysqli_real_escape_string($con,$_POST['txt_name']);
                        $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
                        if ($uname = "" || $name="" || $password = ""){
                            echo'Wrong format, please put at least one (1) character.';
                        }else{
                            
                            $sql_query = "INSERT INTO `users` (`username`, `name`, `password`) VALUES ('".$uname."', '".$name."', '".$password."');";
                            $result = mysqli_query($con,$sql_query);
                            echo'The user has been added';
                        }
                        
                    }
            ?>
    </body>
</html>