<?php include 'adminheader.php';?>
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Branch Register</h3>
                     <form method="POST" action="branchdb">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Branch ID" type="text" name="id">
                           </div>
                          
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Branch Address" type="address" name="address">
                           </div>
                           
                           <div class="col-sm-12">
                              <button class="send" name="Submit">Submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
                   
               </div>
                <br>
                <br>
                <link rel="stylesheet" href="style.css">
<table class="custom-table" >
    <tr>
        <th>Branch ID</th>
        <th>Branch Address</th>
        <th>Edit/Delete</th>
    </tr>
<?php
include 'dbconfig.php';
$sql = "SELECT * FROM `branch`;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $address = $row['address'];
        echo "<tr class='custom-row'><td>$id</td><td>$address</td><td><a href='adminbranchedit?id=$id'><img src='img/edit.png'></a><a href='adminbranchdel?id=$id'><img src='img/del.png' onclick='myFunction($id)'></a></td></tr>";
    }
}
?>
</table>
            </div>
         </div>
      </div>

<?php include 'footer.php';?>