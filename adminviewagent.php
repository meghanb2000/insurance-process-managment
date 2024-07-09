<?php include 'adminheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Agent</h3>
             <link rel="stylesheet" href="style.css">
<table class="custom-table" >
    <tr>
        <th>Agent id</th>
        <th>Name</th>
        <th>Phone number</th>
        <th>Update</th>
       
    </tr>
<?php

include 'dbconfig.php';
$sql = "SELECT * FROM `agent`;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name= $row['name'];
        $phone= $row['phone'];
         
          
        echo "<tr class='custom-row'><td>$id</td><td>$name</td><td>$phone</td><td><button><a href='agentsupdats.php id=$id'>updates</button></td></tr>";
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