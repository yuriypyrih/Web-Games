<?php
include "session.php"; // Include session Script
include "update_difficulty.php";

//Delete this echo later
$username = $_SESSION["username"];
echo " Your session is " . $username;

if(!isset($_SESSION["username"])){
   // header("location: index.php"); //Redirecting to index
}

$sql = "SELECT difficulty_level  FROM user WHERE username='$username'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $difficulty = $row["difficulty_level"];
     
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
    <form action="update_difficulty.php" method="post">
    <table border="0" style="margin-top:20px;margin-left:10px;" width="900" align="center">
        <tr>
                <td width="350"><span style="padding:10px;font-size:20px;background-color:#5f4b3a;border:2px solid white">Αλλάξτε το επίπεδο δυσκολίας:</span></td>
                <td width="210" >
                <select style="font-size:20px" name="difficulty">
                                        <option <?php if ($difficulty == "1" ) echo 'selected' ; ?> value ="1">Εύκολο</option>
                                        <option <?php if ($difficulty == "2" ) echo 'selected' ; ?> value ="2">Μεσαίο</option>
                                        <option <?php if ($difficulty == "3" ) echo 'selected' ; ?> value ="3">Προχωρημένο</option>
                                        <option <?php if ($difficulty == "4" ) echo 'selected' ; ?> value ="4">Εύκολο έως Μεσαίο</option>
                                        <option <?php if ($difficulty == "5" ) echo 'selected' ; ?> value ="5">Όλα τα επίπεδα</option>
                                        </select>
                </td>
                
                <td><input type="submit" class="settings-update-btn hover-btn" name="submit" value="Αποθήκευση"></td>
            </tr>
        </table>
        </form>

        <table>
            <tr>
                <td>
                    <a class="settings-btn hover-btn" href="#3">Αλλαγή στοιχείων χρήστη</a>
                </td>
                <td>
                    <a class="settings-btn hover-btn" href="#4">Αλλαγή κωδικού πρόσβασης</a>
                </td>
            </tr>
        </table>
        <a  id="games-back-btn" class="hover-btn games-btn" href="index.php">ΠΙΣΩ</a>
    
    </div>
</body>
</html>