<?php
include("session.php"); // Include Login Script

//Delete this echo later
echo " Your session is " . $_SESSION["username"];

if(!isset($_SESSION["username"])){
   // header("location: index.php"); //Redirecting to index
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="canvas.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="display">
        <ul style="list-style: none;">
            <li><a class="menu-btn hover-btn" href="games.php">ΠΑΙΧΝΙΔΙΑ</a></li>
            <li><a class="menu-btn hover-btn" href="settings.php">ΡΥΘΜΙΣΕΙΣ</a></li>
            <li><a class="menu-btn hover-btn" href="contact.asp">ΣΤΑΤΙΣΤΙΚΑ</a></li>
            <li><a class="menu-btn hover-btn" href="about.asp">ΑΞΙΟΛΟΓΗΣΗ</a></li>
            <li><a class="menu-btn hover-btn" href="logout.php">ΑΠΟΣΥΝΔΕΣΗ</a></li>
        </ul>
     </div>
</body>
</html>