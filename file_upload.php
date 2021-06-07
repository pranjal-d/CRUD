<?php
$myfile='';
if($_FILES['pick']['error']!=4)
{
	if($_FILES['pick']['name'][0]){
        $totfiles=count($_FILES['pick']['name']);
        for($i=0;$i<$totfiles;$i++){
            $validtext=['jpg','gif','jpeg','png','bmp'];
            $ext=strtolower(substr($_FILES['pick']['name'][$i],strrpos($_FILES['pick']['name'][$i],'.')+1));
            if(in_array($ext,$validext)){
            $myfile=time()."$_POST[name]_".$_FILES['pick']['name'];
            if(move_uploaded_file($_FILES['pick']['tmp_name'],"pick/$myfile")){
                echo "<div style=\"color:green;\">.($i+1)."File successfully uploaded"."
                "</div>";
            }else{
                echo "<div style=\"color:red;\">.($i+1)."File not valid ext"."
                "</div>";
            }
            }
        }
    }
}    
    $con=mysqli_connect('localhost','root','','crud');
    if(mysqli_query($con,"insert into file set file_name= '$_POST[File_name]',pick='$myfile'")){
        print_r($files);
    }else{
        echo "no file upload";
    }    
    mysqli_close($con);
    header("Location:list.php");
?>
