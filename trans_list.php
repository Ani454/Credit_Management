<?php session_start(); 
#$_POST['name'];
?>

<h1>List of all users for transfer</h1>

<link rel="stylesheet" type="text/css" href="style1.css">

<table class="table table-stripped">
<th>Name</th><th>Current credit</th>
<?php
include("connect.php");
$sid=$_POST['id'];
$sname=$_POST['name'];
$scredit=$_POST['credit'];
$result = mysqli_query($link,"select * from user where id !=$sid");
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    <td> 
    
        <?php echo $row['name']; ?>         
    </td>
    <td>
   
         <?php echo $row['current_credit']; ?> 
    </td>
    
    <td> 
    <form action="transfermoney.php" method="POST">
        <input type="hidden" value="<?php echo $row['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $row['current_credit']; ?>" name="curr_credit">
        <input type="hidden" value="<?php echo $row['email']; ?>" name="email">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
        <input type="hidden" value="<?php echo $sid; ?>" name="ids">
        <input type="hidden" value="<?php echo $sname; ?>" name="sender">
        <input type="hidden" value="<?php echo $scredit; ?>" name="credit">
        <input class="button" type="submit" value="Select for transfer">
    </form>
    </td>
    </tr>
<?php
}
$_SESSION['fromname']=$sname;
#$_SESSION['toname1']=$row['uname'];
#echo ($_SESSION['toname']);
#echo ($_SESSION['toname1']);
?>
</table>
</form>