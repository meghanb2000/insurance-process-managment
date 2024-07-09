<?php
        if(isset($_POST['approve']))
      {
            $id=$_GET['id'];
        $clientname=$_POST['clientname'];
       $insuranceid=$_POST['insuranceid']; 
           $amount=$_POST['amount'];
           $description=$_POST['description'];
            $approvedamount=$_POST['approvedamount'];
                $sql="UPDATE `climy` SET status='approve',approvedamount='$approvedamount' WHERE id='$id';";
        //  echo $sql;
             include 'dbconfig.php';
             if($conn->query($sql))
                 {
                 echo "<script>alert('Approved Successfully')</script>";
                 echo "<meta http-equiv='refresh' content='0;claimrequest'>";
             }
             else{
                  echo "<script>alert('Not approved')</script>";
               echo "<meta http-equiv='refresh' content='0;claimrequest'>";
             }
      }
      
        else if(isset($_POST['reject']))
      {
            $id=$_GET['id'];
        $clientname=$_POST['clientname'];
       $insuranceid=$_POST['insuranceid']; 
           $amount=$_POST['amount'];
            $approvedamount=$_POST['approvedamount'];
             $sql="UPDATE `climy` SET status='rejected' WHERE id='$id';";
          //echo $sql;
             include 'dbconfig.php';
             if($conn->query($sql))
                 {
                 echo "<script>alert('Reject Successfully')</script>";
                 echo "<meta http-equiv='refresh' content='0;claimrequest'>";
             }
             else{
                  echo "<script>alert('Not approved')</script>";
               echo "<meta http-equiv='refresh' content='0;claimrequest'>";
             }
      }
      else{
          header("location:claimrequest");
      }
      
        ?>
