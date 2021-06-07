<?php
if(!isset($_GET['id'])|| !trim($_GET['id'])){
    echo "Trouble to load updateform!";
    exit;
}

$con=mysqli_connect('localhost','root','','crud');
$rs=mysqli_query($con,"select * from crud where id=$_GET[id]");
$info=mysqli_fetch_assoc($rs);
    // if(!($info=mysqli_fetch_assoc($rs))){
    //     echo "Problem to fetch data";
    //     exit;
    // }
// print_r($info);    
mysqli_close($con);    
?>

<form action="update.php?id=<?php echo $_GET['id'];?>" method="post">
  <table align="center" width="500px" border="1px">
    <tr>
        <th colspan=2>Table</th>
    </tr>
    <tr>
        <td><label for="name"> Name :</label></td>
        <td><input type="text" placeholder="Enter Name" name="name" id="name" value="<?= $info['name']??'';?>"></td>
    </tr>
    <tr>
        <td><label for="description"> Description :</label></td>
        <td><input type="text" placeholder="Enter Description" name="description" id="description" value="<?= $info['description']??'';?>"></td>
    </tr> 
    <tr>
        <th colspan=2> <button> Update </button> </th>
    </tr>
  </table>
</form>