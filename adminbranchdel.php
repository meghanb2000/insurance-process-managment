<?php
$id=$_GET['id'];
include 'dbconfig.php';
$sql="DELETE FROM `branch` WHERE id='$id';";
if($conn->query($sql))
{
    echo "<script> alert('Branch Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;branch'>";
}
else{
    echo "<script> alert('Branch not Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;branch'>";
}
?>