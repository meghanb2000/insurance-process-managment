<?php
      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
           $phone=$_POST['phone'];
            $email=$_POST['email'];
             $gender=$_POST['gender'];
              $address=$_POST['address'];
               $branchid=$_POST['branchid'];
                
                $password=$_POST['password'];
            $sql="insert into `agent`(name,phone,email,gender,address,branchid,id,password)value('$name','$phone','$email','$gender','$address','$branchid',null,'$password');";
         //echo $sql;
           include 'dbconfig.php';
           if($conn->query($sql))
           {
               echo "<script>alert('Inserted Succesfully')</script>";
              echo "<meta http-equiv='refresh' content='0;managerviewagent'/>";  
      }   
      else{
           echo "<script>alert('Failed to insert')</script>";
              echo "<meta http-equiv='refresh' content='0;agentregister'/>";  
      }
      }
      else{
          header("location:agentregister");
      }
        ?>
    
