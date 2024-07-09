<?php include'adminheader.php';?>
        <?php
      $id=$_GET['id'];
include 'dbconfig.php';
$sql="SELECT * FROM `manager` WHERE id='$id'; ";
$result=$conn->query($sql);
if($result->num_rows>0)
  
{
  $slno=0;
    while($row=$result->fetch_assoc()){
        $slno++;
        $name=$row['name'];
         $branchid = $row['branchid'];

    }
}
?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Manager edit</h3>
                     <form method="POST" action="adminmanagereditdb?id=<?php echo $id;?>">
                        <div class="row">
                          
                            
                           <div class="col-sm-12">
                               <input class="contactus"value='<?php echo $name;?>' type="text" name="name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" value='<?php echo $branchid;?>' type="text" name="branchid">
                           </div>
                           <div class="col-sm-12">
                              <button class="send" name="submit">Submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
  
       <?php include 'footer.php'; ?>
     
