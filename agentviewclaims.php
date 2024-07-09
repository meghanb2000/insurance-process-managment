<?php include 'agentheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Claim</h3>
             <link rel="stylesheet" href="style.css">
<table class="custom-table" >
    <tr>
        <th>ID</th>
        <th>Client Name</th>
        <th>Insurance ID</th>
       <th>Requested Amount</th>
       <th>Description</th>
       <th>Approved Amount</th>
       <th>Status</th>
    </tr>
<?php

include 'dbconfig.php';
$sql1= "SELECT * FROM `insurance` where agentid='$id' ;";
//echo $sql1;
$result2 = $conn->query($sql1);
if ($result2->num_rows > 0) {
    while ($row2= $result2->fetch_assoc()) {
       $insuranceid=$row2['insuranceid'];
    
$sql2= "SELECT * FROM `climy` where insuranceid='$insuranceid';";
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
        $approvedamount = $row1['approvedamount'];
       $status=$row1['status'];
        echo "<tr class='custom-row'><td>$id</td><td>$clientname</td><td>$insuranceid</td><td>$amount</td><td>$description</td><td>$approvedamount</td><td>$status</td></tr>";
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