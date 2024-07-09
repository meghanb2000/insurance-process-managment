<?php
       if(isset($_POST['login']))
       {
           $id=$_POST['id'];
           $password=$_POST['password'];
         
           $sql="SELECT * FROM `agent` WHERE id='$id'and password='$password';";
           
           //echo $sql;
           include 'dbconfig.php';
          $result=$conn->query($sql);
           if($result->num_rows>0)
           {
               while($row=$result->fetch_assoc())
               {
                   session_start();
                   $_SESSION['id']=$id;
                   $_SESSION['password']=$password;
                   echo "<meta http-equiv='refresh' content='0;agentviewinsurance'>";
               }
           }
           else{
               echo "<script>alert('username and password mismatch')</script>";
               echo "<meta http-equiv='refresh' content='0;agentlogin'>";
           }
       }
       else{
           header("location:agentlogin");
       }
        ?>
