<!DOCTYPE HTML>
<?php
session_start();
include("functions.php");
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <?php
        print_message();
        echo "<br>";
    ?>
<form name="login" method="post" action="login.php">
<table border="0" width="225" align="center">
    <tr>
        <td width="219" bgcolor="#999999">
            <p align="center"><font color="white"><span style="font-size:12pt;"><b>Login</b></span></font></p>
        </td>
    </tr>
    <tr>
        <td width="219">
            <table border="0" width="320" align="center">
                <tr>
                    <td width="71"><span style="font-size:10pt;">Username:</span></td>
                    <td width="139"><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td width="71"><span style="font-size:10pt;">Password:</span></td>
                    <td width="139"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td width="71">&nbsp;</td>
                        <td width="139">
                            <p align="right"><input type="submit" name="submit" value="Submit"></p>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="219" bgcolor="#999999"><font color="white">Not Registered? </font><a href="register.php" target="_self"><font color="white">Register</font></a><font color="white"> </font><b><i><font color="white"> Now!</font></i></b></td>
    </tr>
</table>
</form>
</body>
</html>