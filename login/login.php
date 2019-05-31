<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <?php
    session_start();
    include "connect.php";
    include "functions.php";
    $_SESSION['role'] = 0;
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    if (empty($username) || empty($password)) {
        send_message('Πρέπει να συμπληρώσετε και τα 2 πεδία (όνομα και κωδικό χρήστη)', 'error');
        header("Location: index.php");
        exit();
    }

    $sql = "SELECT username, password, id_role FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['id_role'];

        $_SESSION['username'] = $username;
        // $_SESSION['password'] = $password;
        $_SESSION['id_role'] = $role;
    } else {
        send_message('Λάθος στοιχεία', 'error');
        header("Location: index.php");
        exit();
    }

    switch ($_SESSION['id_role']) {
        case 1: //admin
            header("Location: admin.php");
            exit();
            break;
        case 2: //user
            header("Location: main.php");
            exit();
            break;
    }
    ?>
