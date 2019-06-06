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
<link rel="stylesheet" href="games.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="display">
       <p id="header_tittle">Λάθος, πρσπάθησε ξανά..</p>
       <img id="icon_endscreen"src="img/red-cross-png.png" alt="Red cross">
       <a style="left:100px;"  class="games2_endscreen_btn hover-btn" href="games2.php">ΞΑΝΆ</a>
       <a style="left:480px;" class="games2_endscreen_btn hover-btn" href="games.php">ΈΞΟΔΟΣ</a>
     </div>
</body>
</html>