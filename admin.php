<?php include 'header.php';?> 
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Admin Login</h3>
                     <form method="POST" action="admindb">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="User Name" type="text" name="username">
                           </div>
                          
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Password" type="password" name="password">
                           </div>
                           
                           <div class="col-sm-12">
                              <button class="send" name="login">login</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php include 'footer.php';?>