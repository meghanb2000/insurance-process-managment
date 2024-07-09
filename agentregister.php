<?php include 'managerheader.php';?> 
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Agent Register</h3>
                     <form method="POST" action="agentregisterdb">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder=" Name" type="text" name="name">
                           </div>
                          <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone Number" type="tel" name="phone">
                           </div>
                            <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="email" name="email">
                           </div>
                             <div class="col-sm-12">
                                <input class="contactus" placeholder="Address" type="address" name="address">
                           </div>
                             <link rel="stylesheet" href="style.css">           
                             <div class="col-sm-12">
                             <div class="radio-container">
                             <input value="Male" name="gender" id="male" type="radio">
                              <label for="male">Male</label>
                              </div>
                             <div class="radio-container">
                             <input value="Female" name="gender" id="female" type="radio">
                             <label for="female">Female</label>
                             </div>
                                </div>
                              <div class="col-sm-12">
                               <select  name="branchid" class="sel">
                                <option value="">Select Branch ID</option>

                                <?php
                                include 'dbconfig.php';
                                $sql = "SELECT * FROM `manager`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $branchid = $row['branchid'];
                                        
                                        echo "<option value=\"$branchid\" class='opt'>$branchid </option>";
                                    }
                                }
                                ?>
                            </select>
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Password" type="password" name="password">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Conform Password" type="password" name="repassword">
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
<?php include 'footer.php';?>
