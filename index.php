<?php
include("login.php"); // Include Login Script

if(isset($_SESSION["username"])){
    header("location: main.php"); //Redirecting to main Menu
}
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="canvas.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div style="background-color: #202430">
    <form name="login" method="post" action="login.php">
    <table border="0" width="225" align="center">
    <tr>
        <td width="219" bgcolor="#5f4b3a">
            <p align="center"><font color="white"><span style="font-size:26px;"><b>Login</b></span></font></p>
        </td>
    </tr>
    <tr>
        <td width="219">
            <table border="0" width="320" align="center">
                <tr>
                    <td width="71"><span style="font-size:26px;">Username:</span></td>
                    <td width="139"><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td width="71"><span style="font-size:26px;">Password:</span></td>
                    <td width="139"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td width="71">&nbsp;</td>
                        <td width="139" >
                            <p align="right" ><input type="submit" style="background-color: #5f4b3a;width:100%;border:2px solid white;color:white" name="submit" value="Submit"></p>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="font-size:20px;" width="219" bgcolor="#5f4b3a"><font color="white" >Not Registered? </font><a href="register.php" target="_self"><font color="white">Register</font></a><font color="white"> </font><b><i><font color="white"> Now!</font></i></b></td>
    </tr>
    </table>
    </form>
</div>
</body>
</html>