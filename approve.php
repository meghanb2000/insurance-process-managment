<?php include 'managerheader.php';?> 
<?php
     $id=$_GET['id'];
include 'dbconfig.php';
$sql="SELECT * FROM `climy` WHERE id='$id'; ";
$result=$conn->query($sql);
if($result->num_rows>0)
  
{
  $slno=0;
    while($row=$result->fetch_assoc()){
        $slno++;
         $clientname=$row['clientname'];
          $cphone=$row['cphone'];
        $insuranceid = $row['insuranceid'];
        $amount=$row['amount'];
        $description=$row['description'];
        
    }
}
?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                    
 <form method="POST" action="approvedb ?id=<?php echo $id;?>">
                        <div class="row">
                          
                           <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $clientname ;?>'  type="text" name="clientname">
                           </div>
                            <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $cphone ;?>'  type="tel" name="cphone">
                           </div>
                           <div class="col-sm-12">
                               <input class="contactus" value='<?php echo $insuranceid ;?>' type="text" name="insuranceid">
                           </div>
                            <div class="col-sm-12">
                               <input class="contactus" value='<?php echo $amount ;?>' type="text" name="amount">
                           </div>
                            <div class="col-sm-12">
                               <input class="contactus" value='<?php echo $description ;?>' type="text" name="amount">
                           </div>
                             <div class="col-sm-12">
                                 <input class="contactus" placeholder="Enter Approve amount" type="text" name="approvedamount">
                           </div>
                           <div class="col-sm-12">
                              <button class="send" name="approve">Approved</button>
                           </div>
                            <br>
                            <br>
                            <div class="col-sm-12">
                              <button class="send" name="reject">Reject</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
</div>
<?php include 'footer.php';?>
