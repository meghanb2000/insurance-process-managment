<?php
        if(isset($_POST['Submit']))
      {
            $id=$_GET['id'];
        
           $name=$_POST['name'];
          $phone=$_POST['phone'];
             $sql="UPDATE`agent` SET name='$name',phone='$phone' WHERE id='$id';";
         // echo $sql;
             include 'dbconfig.php';
             if($conn->query($sql))
                 {
                 echo "<script> alert('Agent edited')</script>";
                 echo "<meta http-equiv='refresh' content='0;managerviewagent'>";
             }
             else{
                  echo "<script> alert(/'Agent not edited'/)</script>";
              echo "<meta http-equiv='refresh' content='0;managerviewagent'>";
             }
      }
      else{
          header("location:manageragentedit");
      }
      
        ?>