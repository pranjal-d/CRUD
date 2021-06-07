<?php
$con=mysqli_connect('localhost','root','','crud');
$rs=mysqli_query($con,"Delete from crud where id=$_GET[id]");
    // if(mysqli_query($con,$rs)){
    //     echo "Delete record successfully";}
    //  } else{
    //     echo "Erorr deleting record" . mysqli_query($con,$rs);
    // }
mysqli_close($con);
?>