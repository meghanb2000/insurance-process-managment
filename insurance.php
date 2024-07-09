<?php include 'agentheader.php';?> 
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact">
                     <h3>Insurance</h3>
                     <form method="POST" action="insurancedb">
                        <div class="row">
                           <div class="col-sm-12">
                             <select name="clientname" class="sel">
                                <option value="">Select Client Name </option>

                                <?php
                                include 'dbconfig.php';
                                $sql = "SELECT * FROM `client`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $name = $row['name'];
                                        
                                        echo "<option value=\"$clientname\" class='opt'>$name</option>";
                                    }
                                }
                                ?>
                            </select>
                                 </div>
                         <div class="col-sm-12">
                             <select name="clientname" class="sel">
                                <option value="">Select Client Phone number </option>

                                <?php
                                include 'dbconfig.php';
                                $sql = "SELECT * FROM `client`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $phone = $row['phone'];
                                        
                                        echo "<option value=\"$phone\" class='opt'>$phone</option>";
                                    }
                                }
                                ?>
                            </select>
                                 </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Nomini Name" type="text" name="nomininame">
                           </div>
                             <div class="col-sm-12">
                                <input class="contactus" placeholder="Nomini Date of Birth" type="date" name="nominidob">
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
                             <div class="radio-container">
                             <input value="Single" name="relatives" id="single" type="radio">
                              <label for="single">Mother</label>
                              </div>
                             <div class="radio-container">
                             <input value="Married" name="relatives" id="married" type="radio">
                             <label for="married">Father</label>
                             </div>
                                  
                                 <div class="radio-container">
                             <input value="employee" name="relatives" id="employee" type="radio">
                             <label for="employee">Wife</label>
                             </div>
                                  <div class="radio-container">
                             <input value="employee" name="relatives" id="employee" type="radio">
                             <label for="employee">Husband</label>
                             </div>
                               
                                 <div class="radio-container">
                             <input value="employee" name="relatives" id="employee" type="radio">
                             <label for="employee">Daughter</label>
                             </div>
                                 <div class="radio-container">
                             <input value="employee" name="relatives" id="employee" type="radio">
                             <label for="employee">Son</label>
                             </div>
                                   </div>
                             <div class="col-sm-12">
                              <input class="contactus" placeholder="Insurance Name" type="text" name="insurancename">
                           </div>
                                    <div class="col-sm-12">
                              <input class="contactus" placeholder="Insurance ID" type="text" name="insuranceid">
                           </div>
                                    <div class="col-sm-12">
                              <input class="contactus" placeholder="Agent Name" type="text" name="agentname">
                           </div>
                                    <div class="col-sm-12">
                              <input class="contactus" placeholder="Agent ID" type="text" name="agentid">
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
                              <input class="contactus" placeholder="Bank Name" type="text" name="bankname">
                           </div>
                                    <div class="col-sm-12">
                              <input class="contactus" placeholder="Account Number" type="text" name="accno">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="IFSC" type="text" name="ifsc">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="type" type="text" name="type">
                           </div>
                                  <div class="col-sm-12">
                              <input class="contactus" placeholder="Insuransed" type="text" name="insuransed">
                           </div>
                                     <div class="col-sm-12">
                              <input class="contactus" placeholder="Renwal Date" type="date" name="reneweldate">
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