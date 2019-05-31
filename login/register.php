<head>
    <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
session_start();
include "connect.php";
include "functions.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['submit'])) && ($_POST['submit'] == 'Submit')) {

    $fname = mysqli_real_escape_string($link, $_POST['fname']);
    $lname = mysqli_real_escape_string($link, $_POST['lname']);
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $id_role = mysqli_real_escape_string($link, $_POST['id_role']);

    if (empty($fname) || empty($lname) || (empty($username)) || empty($password)) {
        send_message('Πρέπει να συμπληρώσετε τα υποχρεωτικά πεδία (με τον αστερίσκο *)', 'error');
        header("Location: register.php");
        exit();
    }

    mysqli_autocommit($link, false);

    $query = "insert into user 
                            (
                                fname,
                                lname,
                                username,
                                password,
                                email,
                                id_role,
                                dt_registered
                            ) 
                            Values
                            (
                                '$fname',
                                '$lname',
                                '$username',
                                '$password',
                                '$email',
                                '$id_role',
                                 now()
                            )";
//echo $query;
//die;
    $result = mysqli_query($link, $query);

    if ($result) {
        mysqli_commit($link);
        send_message('Τα στοιχεία σας καταχωρήθηκαν με επιτυχία.', 'success');
        header("Location: index.php");
        exit();
    } else {
        mysqli_rollback($link);
        send_message('Τα στοιχεία δεν καταχωρήθηκαν λόγω προβλήματος στην βάση του συστήματος.', 'error');
    }
}
?>
<body>
    <?php
    print_message();
    echo "<br>";
    ?>
    <form action="register.php" method="post">
        <table border="0" width="225" align="center">
            <tr>
                <td width="219" bgcolor="#999999">
                    <p align="center"><font color="white"><span style="font-size:12pt;"><b>Registration</b></span></font></p>
                </td>
            </tr>
            <tr>
                <td width="219">
                    <table border="0" width="382" align="center">
                        <tr>
                            <td width="116"><span style="font-size:10pt;">First Name:</span></td>
                            <td width="256"><input type="text" name="fname" maxlength="100"> * </td>
                        </tr>
                        <tr>
                            <td width="116"><span style="font-size:10pt;">Last Name:</span></td>
                            <td width="156"><input type="text" name="lname" maxlength="100"> * </td>
                        </tr>
                        <tr>
                            <td width="116"><span style="font-size:10pt;">Email:</span></td>
                            <td width="156"><input type="text" name="email" maxlength="100"></td>
                        </tr>
                        <tr>
                            <td width="116"><span style="font-size:10pt;">Username:</span></td>
                            <td width="156"><input type="text" name="username"> * </td>
                        </tr>
                        <tr>
                            <td width="116"><span style="font-size:10pt;">Password:</span></td>
                            <td width="156"><input type="password" name="password"> * </td>
                        </tr>
                        <tr>
                            <td width="116"><span style="font-size:10pt;">Ρόλος Χρήστη:</span></td>
                            <td width="156"><input type="text" name="id_role"></td>
                        </tr>
                        <tr>
                            <td width="116">&nbsp;</td>
                            <td width="156">
                                <p align="left"><input type="submit" name="submit" value="Submit"></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td width="219" bgcolor="#999999"><font color="white">Already Registered?? </font><a href="index.php" target="_self"><font color="white">Log in</font></a><font color="white"> </font><b><i><font color="white"> Now!</font></i></b></td>
            </tr>
        </table>
    </form>
</html>