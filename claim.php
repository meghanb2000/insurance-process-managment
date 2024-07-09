<?php include 'clientheader.php';?>
<?php
include 'dbconfig.php';
$id=$_GET['id'];

$sql = "SELECT * FROM `insurance` WHERE cphone='$phone';";
$result = $conn->query($sql);
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        $clientname=$row['clientname'];
        $cphone=$row['cphone'];
        $insuranceid=$row['insuranceid'];
    }
    }
    ?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Claim</h3>
                   <form method="post" action="claimdb?id=<?php echo $id;?>">
                         
 
                             <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $clientname?>' type="text" name="clientname">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $cphone?>' type="text" name="cphone">
                           </div>
                             <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $insuranceid?>' type="text" name="insuranceid">
                           </div>
                        
                             <div class="col-sm-12">
                              <input class="contactus" placeholder="Requested Amount" type="text" name="amount">
                           </div>
                       
                             <div class="col-sm-12">
                              <input class="contactus" placeholder="Description" type="text" name="description">
                           </div>
                          <div class="col-sm-12">
                              <button class="send" type="submit" name="submit">Submit</button>
                             
                           </div>
</form>
                  </div>
                   
               </div>
            </div>
         </div>
      </div>
<?php    include 'footer.php';?>