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

    
    </div>
</body>
</html>