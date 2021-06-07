<?php
$con=mysqli_connect('localhost','root','','crud');
$rs=mysqli_query($con,"Select * from crud order by id");
// $data=mysqli_fetch_all( $rs, MYSQLI_ASSOC );
// print_r($data);
// mysqli_close($con);
?>

<table align="center" width="600px" height="35%" border="1px">
    <thead>
        <tr>
            <th colspan=6>Table</th>
        </tr>
        <tr>
            <th align="right" colspan=6><a href="insertform.php">Add Record</a></th>
        </tr>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan=3>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $Sno=1;
            while($info = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <!-- <td><?= $info['id'];?></td> -->
            <td><?= $Sno++;?></td>
            <td><?= $info ['name'];?></a></td>
            <td><?= $info ['description'];?></td>
            <td><a href="updateform.php?id=<?=$info['id'];?>"> Update</a></td>
            <td><a href="delete.php?id=<?=$info['id'];?>">Delete</a></td>
            <td><a href="img.php?id=<?=$info['id'];?>">Image</a></td>
        </tr>
        <?php
            
         } ?>
    </tbody>
</table>