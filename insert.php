<?php
    $con=mysqli_connect('localhost','root','','crud');
    $rs=mysqli_query($con,"insert into crud set name= '$_POST[name]', 
    description= '$_POST[description]'");
    mysqli_close($con);
    header("Location:list.php");
?>

 