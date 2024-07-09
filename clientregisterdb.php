<?php
      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
           $phone=$_POST['phone'];
            $email=$_POST['email'];
             $gender=$_POST['gender'];
            $branchid=$_POST['branchid'];
               $homeaddress=$_POST['homeaddress'];
                 
                $password=$_POST['password'];
                $sql="SELECT * FROM `client` WHERE phone='$phone';";
            $sql="insert into `client`(name,phone,email,gender,homeaddress,branchid,password)value('$name','$phone','$email','$gender','$homeaddress','$branchid','$password');";
      // echo $sql;
           include 'dbconfig.php';
           if($conn->query($sql))
           {
               echo "<script>alert('Inserted Succesfully')</script>";
               echo "<meta http-equiv='refresh' content='0;insurance'/>";  
      }   
      else{
           echo "<script>alert('Failed to insert')</script>";
             echo "<meta http-equiv='refresh' content='0;clientregister'/>";  
      }
      }
      else{
          header("location:clintregister");
      }
        ?>
    

