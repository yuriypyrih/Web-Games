<?php
//session_start();
include "connect.php";


if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['submit'])) && ($_POST['submit'] == 'Αποθήκευση')) {

    $difficulty = mysqli_real_escape_string($link, $_POST['difficulty']);
    $username = $_SESSION["username"];

    $sql = "UPDATE user SET difficulty_level='$difficulty' WHERE username='$username'";
    mysqli_query($link, $sql);

    header("Location: settings.php");
    
   
}

?>