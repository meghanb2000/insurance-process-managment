<?php include 'header.php';?> 
<div id="testimonial" class="testimonial">
         <div class="container" >
            
            <div class="row " >
               
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                  <div class="contact"  >
                     <h3>Manager Login</h3>
                     <form method="POST" action="managerlogindbdb">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="ID" type="text" name="id">
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