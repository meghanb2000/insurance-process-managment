<?php include 'clientheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
                
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Claim Update</h3>
             <link rel="stylesheet" href="style.css">
                   <table class="custom-table" >
    <tr>
        <th>Insurance ID</th>
        <th>Requested Amount</th>
        <th>Description</th>
        <th>Status</th>
        <th>Approval amount</th>
       
    </tr>
<?php

include 'dbconfig.php';
$sql1 = "SELECT * FROM `insurance` Where cphone='$phone';";
//echo $sql1;
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {  
        $insuranceid=$row['insuranceid'];
$sql2 = "SELECT * FROM `climy` Where insuranceid='$insuranceid';";
//echo $sql2;
$result1 = $conn->query($sql2);
if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        $insuranceid=$row1['insuranceid'];
        $amount= $row1['amount'];
        $description= $row1['description'];
        $status= $row1['status'];
       $approvedamount= $row1['approvedamount'];
        echo "<tr class='custom-row'><td>$insuranceid</td><td>$amount</td><td>$description</td><td>$status</td><td>$approvedamount</td></tr>";
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