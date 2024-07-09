<?php
    if(isset($_POST['Submit'])){
        $id=$_POST['id'];
        $address=$_POST['address'];
        $sql="insert into `branch`(id,address)value('$id','$address');";
       // echo $sql;
        include 'dbconfig.php';
      if($conn->query($sql))
      {
          //echo "<script>alert('Successfully added')</script>";
          echo "<meta http-equiv='refresh' content='0;branch'>";
      }
      else{
           echo "<script>alert('Not added successfully')</script>";
          echo "<meta http-equiv='refresh' content='0;branch'>";
      }
        
    }
    else{
        header("location:branch.php");
    }
    
        ?>