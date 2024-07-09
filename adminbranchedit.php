
<?php include'adminheader.php';?>
        <?php
      $id=$_GET['id'];
include 'dbconfig.php';
$sql="SELECT * FROM `branch` WHERE id='$id'; ";
$result=$conn->query($sql);
if($result->num_rows>0)
  
{
  $slno=0;
    while($row=$result->fetch_assoc()){
        $slno++;
         $id = $row['id'];
        $address = $row['address'];
        
    }
}
?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Branch Edit</h3>
                     <form method="POST" action="adminbrancheditdb?id=<?php echo $id; ?>">
                        <div class="row">
                          
                          
                           <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $address ;?>' type="address" name="address">
                           </div>
                           
                           <div class="col-sm-12">
                              <button class="send" name="Submit">Submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
                   
               </div>
                </div>
         </div>
</div>
    
       <?php include 'footer.php'; ?>
     

