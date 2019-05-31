<?php
//include "admin_check.php";
include "connect.php";
include "functions.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<?php
$sql = "select  fname,
		lname,
		email
	from user";

$result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
?>
<br>
<table class="view">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <tr class="alt">
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <?php
    }
    ?>	
</table>