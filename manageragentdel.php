<?php
$id=$_GET['id'];
include 'dbconfig.php';
$sql="DELETE FROM `agent` WHERE id='$id';";
if($conn->query($sql))
{
    echo "<script> alert('agent Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;managerviewagent'>";
}
else{
    echo "<script> alert('Branch not Deleted')</script>";
                 echo "<meta http-equiv='refresh' content='0;managerviewagent'>";
}
?>