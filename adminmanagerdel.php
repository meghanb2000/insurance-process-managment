<?php
$id=$_GET['id'];
include 'dbconfig.php';
$sql="DELETE FROM `manager` WHERE id='$id';";
if($conn->query($sql))
{
    echo "<script> alert('manager Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;viewmanager'>";
}
else{
    echo "<script> alert('manager not Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;viewmanager'>";
}
?>