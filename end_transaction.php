<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
     
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<?php
 include("connect.php");

#echo ($_SESSION['fromname']);
#echo ($_SESSION['toname']);
#echo ($_POST['mycredits']);
$sql="update user set current_credit=current_credit-".$_POST['mycredits']." where name='".$_SESSION['fromname']."';";
mysqli_query($link, $sql); 
?>

<?php

$sql1="update user set current_credit=current_credit+".$_POST['mycredits']." where name='".$_SESSION['toname']."';";
mysqli_query($link, $sql1);
?>

<div class="container" id=as>
<a class="button" type="button" value="View all users" href="table.php">VIEW ALL USERS</a>
</div>
</body>
</html>
<?php $_SESSION?>