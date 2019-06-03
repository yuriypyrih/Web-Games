<?php
    session_start();
    include "connect.php";
    include "functions.php";


    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    if (empty($username) || empty($password)) {
        send_message('Πρέπει να συμπληρώσετε και τα 2 πεδία (όνομα και κωδικό χρήστη)', 'error');
        header("Location: index.php");
        exit();
    }

    $sql = "SELECT username, password FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        // $_SESSION['password'] = $password;
        header("Location: main.php");
     
    } else {
        send_message('Λάθος στοιχεία', 'error');
        header("Location: index.php");
        exit();
    }

   
    ?>
