<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <body>
<?php 
session_start(); 

?>
<link rel="stylesheet" type="text/css" href="style1.css">
<h1 style="background-color: #7B68EE">Transfer your money</h1>

<?php
 
  $rid = $_POST['id'];
  $rname = $_POST['name'];
  $remail = $_POST['email'];
  $rcredit = $_POST['curr_credit'];
  $usid=$_POST['sender'];
  $usname=$_POST['ids'];
  $uscredit=$_POST['credit'];
  #echo($uscredit);


?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<h2>Money will transfer from <b><?php echo $usid; ?></b> to <b><?php echo $rname; ?></b></h2>
<br>
<h3>Enter your money for transfer</h3>


<?php
#$_SESSION['toname']=$rname;
$_SESSION['toname']=$_POST['name'];

 
?>

 <form action="finalpage.php" method="POST">
 <!--<input type="text" name="inputcredit" placeholder="fdfsfs"> -->
 <input type="text" name="mycredits" placeholder="credits">
 <input type="hidden" value="<?php echo $rid; ?>" name="id">
 <input type="hidden" value="<?php echo $usname; ?>" name="ids">
 <input type="hidden" value="<?php echo $uscredit; ?>" name="credit">
 <input type="submit" class="button" value="Confirm-transfer" name="submit">

 </form>

<?php 

	#$a=;
	#echo($_POST['paisa']);
	



?>
</body>
</html>
