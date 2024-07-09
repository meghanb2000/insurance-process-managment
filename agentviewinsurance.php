<?php include 'agentheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Insurance</h3>
             <link rel="stylesheet" href="style.css">
             <div style="overflow-x: scroll;">
<table class="custom-table" >
    <tr>
        <th>Client name</th>
        <th> Client Phone</th>
         <th>Nomini Name</th>
         <th>Nomini DOB</th>
        
         <th>Nomini Gender</th>
         <th>Relation</th>
        
       
         <th>Insurance name</th>
         <th>Insurance ID</th>
         <th>Agent name</th>
         <th>Agent ID</th>
         <th>Branch ID</th>
         <th>Bank name</th>
         <th>Account no</th>
         <th>IFSC</th>
         <th>Type</th>
         <th>Insuransed</th>
         <th>Renewel Date</th>


         
    </tr>
<?php

include 'dbconfig.php';
$sql = "SELECT * FROM `insurance` WHERE agentid='$id';";
$result = $conn->query($sql);
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        $clientname=$row['clientname'];
       $cphone=$row['cphone'];
             $nomininame=$row['nomininame'];
                $nominidob=$row['nominidob'];
                  
                    $nominigender=$row['nominigender'];
                      $nominirelation=$row['nominirelation'];
                      $insurancename=$row['insurancename'];
                                $insuranceid=$row['insuranceid'];
                                  $agentname=$row['agentname'];
                                    $agentid=$row['agentid'];
                                      $branchid=$row['branchid'];
                                        $bankname=$row['bankname'];
                                          $accno=$row['accno'];
                                            $ifsc=$row['ifsc'];
                                              $type=$row['type']; 
                                              $insuranced=$row['insuranced'];
                                              $reneweldate=$row['reneweldate'];
                                              
        echo "<tr class='custom'><td>$clientname</td><td>$cphone</td><td>$nomininame</td><td>$nominidob</td><td>$nominigender</td><td>$nominirelation</td><td>$insurancename</td><td>$insuranceid</td><td>$agentname</td><td>$agentid</td><td>$branchid</td><td>$bankname</td><td>$accno</td><td>$ifsc</td><td>$type</td><td>$insuranced</td><td>$reneweldate</td></tr>";
    }
}

?>
    
</table>
             </div>
             </div>
             </div>
             </div>
         </div>
      </div>
<?php include 'footer.php';?>

