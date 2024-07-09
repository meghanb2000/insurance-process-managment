<?php include 'managerheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Request</h3>
             <link rel="stylesheet" href="style.css">
<table class="custom-table" >
    <tr>
        <th>ID</th>
        <th>Client Name</th>
        <th>Insurance ID</th>
       <th>Requested Amount</th>
       <th>Description</th>
        <th>Approved<br>/Reject</th>
    </tr>
<?php

include 'dbconfig.php';

$sql1 = "SELECT * FROM `insurance` WHERE branchid='$branchid';";
//echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $insursanceid=$row['insuranceid'];
$sql2= "SELECT * FROM `climy` WHERE status='pending' and insuranceid='$insursanceid';";
//echo $sql2;
$result1 = $conn->query($sql2);
if ($result1->num_rows > 0) {
    while ($row1= $result1->fetch_assoc()) {
       $id=$row1['id'];
        $clientname=$row1['clientname'];
        $cphone=$row1['cphone'];
        $insuranceid= $row1['insuranceid'];
        $amount= $row1['amount'];
       $description = $row1['description'];
        echo "<tr class='custom-row'><td>$id</td><td>$clientname</td><td>$insuranceid</td><td>$amount</td><td>$description</td><td><a href='approve?id=$id'><button>Approvd/Reject</button></a></td></tr>";
         
    }
}
}
}
?>
    
</table>
                  </div>
               </div>
            </div>
   
         </div>
      </div>
<?php include 'footer.php';?>
