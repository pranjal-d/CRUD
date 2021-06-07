<?php
// print_r($_GET);
// print_r($_POST);
$con=mysqli_connect('localhost','root','','crud');
$rs=mysqli_query($con, "Update crud set name='$_POST[name]',description='$_POST[description]' where id=$_GET[id]");
mysqli_close($con);
header("Location:list.php");
?>