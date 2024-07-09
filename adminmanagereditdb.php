<?php
        if(isset($_POST['submit']))
      {
            $id=$_GET['id'];
        $name=$_POST['name'];
         $branchid=$_POST['branchid'];
          
             $sql="UPDATE `manager` SET  name='$name', branchid='$branchid'  WHERE id='$id';";
         // echo $sql;
             include 'dbconfig.php';
             if($conn->query($sql))
                 {
                 echo "<script> alert(' Manager Edited')</script>";
                 echo "<meta http-equiv='refresh' content='0;viewmanager'>";
             }
             else{
                  echo "<script> alert(' Manager not Edited')</script>";
                echo "<meta http-equiv='refresh' content='0;viewmanager'>";
             }
      }
      else{
          header("location:adminmanageredit");
      }
      
        ?>
   
