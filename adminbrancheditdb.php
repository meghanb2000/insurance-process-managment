<?php
        if(isset($_POST['Submit']))
      {
            $id=$_GET['id'];
        
           $address=$_POST['address'];
          
             $sql="UPDATE`branch` SET  address='$address' WHERE id='$id';";
         // echo $sql;
             include 'dbconfig.php';
             if($conn->query($sql))
                 {
                 echo "<script> alert('branch edited')</script>";
                 echo "<meta http-equiv='refresh' content='0;branch'>";
             }
             else{
                  echo "<script> alert('Branch not edited')</script>";
              echo "<meta http-equiv='refresh' content='0;branch'>";
             }
      }
      else{
          header("location:branch");
      }
      
        ?>