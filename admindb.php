<?php
       if(isset($_POST['login']))
       {
           $username=$_POST['username'];
           $password=$_POST['password'];
           $sql="SELECT * FROM `admin` WHERE username='$username'and password='$password';";
         
           include 'dbconfig.php';
          $result=$conn->query($sql);
           if($result->num_rows>0)
           {
               while($row=$result->fetch_assoc())
               {
                   session_start();
                   $_SESSION['username']=$username;
                   $_SESSION['password']=$password;
                   //echo "<script>alert('login Successfully')</script>";
                   echo "<meta http-equiv='refresh' content='0;adminviewinsurance'>";
               }
           }
           else{
               echo "<script>alert('username and password mismatch')</script>";
               echo "<meta http-equiv='refresh' content='0;admin'>";
           }
       }
       else{
           header("location:admin");
       }
        ?>