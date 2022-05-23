<?php
include "..\\config.php";
include "sendEmail.php";


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


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Times | Feedback Form</title>
    <link rel="stylesheet" href="..\Css\Contact_us.css">
    <link rel="icon" href="..\Images\Favicon\Contact_us.ico" type="image/x-icon">
    <script src='..\\Javascript\\script.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body onload="fromthetop()">

    <!-- =========== Nav Links =========== -->

    <nav class="navbar">
        <ul class="nav-links">
            <li style="font-size: 50px;" class="nav-item"><a href="Home.php"><i class="fas fa-gamepad"></i> <span1>Gamer </span1><span2>Times</span2></a></li>
            <li class="nav-item"><a href="..\PHP\Home.php">Home</a></li>
            <li class="nav-item"><a href="..\PHP\NewsMain.php">News</a></li>
            <li class="nav-item"><a href="..\PHP\History.php">History</a></li>
            <li class="nav-item"><a href="..\PHP\Fun Facts.php">Fun Facts</a></li>
            <li class="nav-item"><a href="..\PHP\Quotes.php">Quotes</a></li>
            <li class="nav-item"><a href="..\PHP\Contact_us.php">Contact us</a></li>
        </ul>

    </nav>
    <button onclick="topFunction()" id="myBtn" title="Go to the top"><img src="../Images/top1.png" width="30" height="30" /></button>

    <header>
        <div class="header-content">
    <center>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
			<h2>Send an Email</h2>

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> 
		</form>
    </center>
</div>
</header>


	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>