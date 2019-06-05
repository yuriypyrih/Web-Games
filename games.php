<?php
session_start();
//Delete this echo later
echo " Your session is " . $_SESSION["username"];
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="canvas.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="display">
        <table>
            <tr>
                <td>
                    <a class="games-btn hover-btn" href="games1.php">Λαβύρινθος</a>
                </td>
                <td>
                <a class="games-btn hover-btn" href="games2.php">Ταίριασμα ήχων</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="games-btn hover-btn" href="#3">Βρες το διαφορετικό</a>
                </td>
                <td>
                    <a class="games-btn hover-btn" href="#4">Χρονική σειρά</a>
                </td>
        </table>
        <a  id="games-back-btn" class="hover-btn games-btn" href="index.php">ΠΙΣΩ</a>
    
    </div>
</body>
</html>