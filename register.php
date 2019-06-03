<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" href="canvas.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
session_start();
include "connect.php";
include "functions.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && (isset($_POST['submit'])) && ($_POST['submit'] == 'Submit')) {

    $userID = uniqid();
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $gender = mysqli_real_escape_string($link, $_POST['gender']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $birthdate =  date("Y-m-d", strtotime($_POST['birthdate']));
    $education = mysqli_real_escape_string($link, $_POST['education']);
    $difficulty_level = "1";

    

    if (empty($username) || empty($password)) {
        send_message('Πρέπει να συμπληρώσετε τα υποχρεωτικά πεδία (με τον αστερίσκο *)', 'error');
        header("Location: register.php");
        exit();
    }

    mysqli_autocommit($link, false);

    $sql = "SELECT username FROM user WHERE username='$username'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $count = mysqli_num_rows($result);

    
    if ($count >= 1) {
        
        send_message('Κάποιος έχει ήδη γραφτεί με αυτό το username', 'error');
        header("Location: register.php");
        exit();
     
    }

    $query = "INSERT INTO user 
                            (
                                userID,
                                username,
                                password,
                                gender,
                                city,
                                birthdate,
                                education,
                                difficulty_level
                               
                            ) 
                            VALUES
                            (
                                '$userID',
                                '$username',
                                '$password',
                                '$gender',
                                '$city',
                                '$birthdate',
                                '$education',
                                '$difficulty_level'
                               
                            )";
echo $query;
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
    ?>
<div style="background-color: #202430">
<form action="register.php" method="post">
<table border="0" width="225" align="center">
    <tr>
        <td width="219" bgcolor="#5f4b3a">
            <p align="center"><font color="white"><span style="font-size:20px;"><b>Registration</b></span></font></p>
        </td>
    </tr>
    <tr>
        <td width="219">
            <table border="0" width="282" align="center">
                    <tr>
                        <td width="116"><span style="font-size:20px;">Username*:</span></td>
                        <td width="156"><input type="text" name="username" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td width="116"><span style="font-size:20px;">Password*:</span></td>
                        <td width="156"><input type="password" name="password" maxlength="100"></td>
                    </tr>
                    <tr>
                        <td width="116"><span style="font-size:20px;">Φύλο:</span></td>
                        <td width="156"><input type="radio" name="gender" value="male" checked> Άντρας <br>
                        <input type="radio" name="gender" value="female"> Γυναίκα<br>
                        <input type="radio" name="gender" value="other"> Άλλο</td>
                    </tr>
                <tr>
                    <td width="116"><span style="font-size:20px;">Πόλη:</span></td>
                    <td width="156"><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td width="116"><span style="font-size:20px;">Ημ.Γέννησης:</span></td>
                    <td width="156"><input type="date" name="birthdate"></td>
                </tr>
                <tr>
                    <td width="116"><span style="font-size:20px;">Εκπαίδευση:</span></td>
                    <td width="156"><select name="education">
                                        <option value ="none">Δεν θέλω να πω</option>
                                        <option value ="zero">Αυτοδίδακτος</option>
                                        <option value ="first">Γυμνάσιο</option>
                                        <option value ="second">Λύκειο</option>
                                        <option value ="third">Πανεπιστήμιο</option>
                                        </select> </td>
                </tr>
                <tr>
                    <td width="116">&nbsp;</td>
                        <td width="156">
                            <p align="left"><input type="submit" style="background-color: #5f4b3a;width:100%;border:2px solid white;color:white" name="submit" value="Submit"></p>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="font-size:16px;" width="219" bgcolor="#5f4b3a"><font color="white">Already Registered?? </font><a href="index.php" target="_self"><font color="white">Log in</font></a><font color="white"> </font><b><i><font color="white"> Now!</font></i></b></td>
    </tr>
</table>
</form>
</div>
</body>
</html>