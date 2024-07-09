<?php include'managerheader.php';?>
        <?php
      $id=$_GET['id'];
include 'dbconfig.php';
$sql="SELECT * FROM `agent` WHERE id='$id'; ";
$result=$conn->query($sql);
if($result->num_rows>0)
  
{
  $slno=0;
    while($row=$result->fetch_assoc()){
        $slno++;
      
        $name = $row['name'];
         $phone = $row['phone'];
   
    }
}
?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>agent Edit</h3>
                     <form method="POST" action="manageragenteditdb?id=<?php echo $id; ?>">
                        <div class="row">
                           <div class="col-sm-12">
                               <input class="contactus" value='<?php echo $name ;?>' type="text" name="name">
                           </div>
                          
                           <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $phone ;?>' type="phone" name="phone">
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
     


