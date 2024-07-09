<?php include 'adminheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>View Claims</h3>
             <link rel="stylesheet" href="style.css">
<table class="custom-table" >
    <tr>
        <th>ID</th>
        <th>Agent Name</th>
        <th>View</th>
<?php

include 'dbconfig.php';
$sql = "SELECT * FROM `agent`  ;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       $id=$row['id'];
        $name=$row['name'];
        
        echo "<tr class='custom-row'><td>$id</td><td>$name</td><td><a href='viewclaim?id=$id'><button>View</button></td></a></tr>";
         
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
