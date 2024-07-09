<?php
if(isset($_POST['submit'])){
    $id=$_GET['id'];
    $clientname=$_POST['clientname'];
     $cphone=$_POST['cphone'];
    $insuranceid = $_POST['insuranceid'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    $sql1 = "INSERT INTO `climy`(`id`, `insuranceid`, `amount`, `description`, `status`, `approvedamount`, `clientname`,`cphone`) VALUES ('','$insuranceid','$amount','$description','pending','','$clientname','$cphone')";
    include 'dbconfig.php';
 if($conn->query($sql1))
           {
                   
                             echo "<script>alert('Requested Succesfully Still in pending')</script>";
                        echo "<meta http-equiv='refresh' content='0;clientviewinsurance'/>";  
                    }   
                    else{
                         echo "<script>alert('Requesterd Failed ')</script>";
                    echo "<meta http-equiv='refresh' content='0;climy?id=$id'/>";  
                    }
      }

      else{
          header("location:climy.php");
      }
    

?>