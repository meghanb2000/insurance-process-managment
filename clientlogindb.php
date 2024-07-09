<?php
       if(isset($_POST['login']))
       {
           $phone=$_POST['phone'];
           $password=$_POST['password'];
           $sql="SELECT * FROM `client` WHERE phone='$phone'and password='$password';";
           //echo $sql;
           include 'dbconfig.php';
          $result=$conn->query($sql);
           if($result->num_rows>0)
           {
               while($row=$result->fetch_assoc())
               {
                   session_start();
                   $_SESSION['phone']=$phone;
                   $_SESSION['password']=$password;
                   echo "<meta http-equiv='refresh' content='0; clientviewinsurance'>";
               }
           }
           else{
               echo "<script>alert('phone number and password mismatch')</script>";
              // echo "<meta http-equiv='refresh' content='0;clientlogin'>";
           }
       }
       else{
           //header("location:clientlogin");
       }
        ?>