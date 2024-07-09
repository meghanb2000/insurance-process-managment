<?php
      if(isset($_POST['submit']))
      {
         $clientname=$_POST['clientname'];
            $clientphone=$_POST['clientphone'];
             $nomininame=$_POST['nomininame'];
                $nominidob=$_POST['nominidob'];
                  
                    $nominigender=$_POST['gender'];
                      $relatives=$_POST['relatives'];
                      $insurancename=$_POST['insurancename'];
                                $insuranceid=$_POST['insuranceid'];
                                  $agentname=$_POST['agentname'];
                                    $agentid=$_POST['agentid'];
                                      $branchid=$_POST['branchid'];
                                        $bankname=$_POST['bankname'];
                                          $accno=$_POST['accno'];
                                            $ifsc=$_POST['ifsc'];
                                              $type=$_POST['type']; 
                                              $insuransed=$_POST['insuransed'];
                                              $reneweldate=$_POST['reneweldate'];
                                              
                                              
            $sql="insert into `insurance`(`id`,`clientname`,`cphone`,`nomininame`,`nominidob`,`nominigender`,`nominirelation`,`insurancename`,`insuranceid`,`agentname`,`agentid`,`branchid`,`bankname`,`accno`,`ifsc`,`type`,`insuranced`,`reneweldate`)value(null,'$clientname','$clientphone','$nomininame','$nominidob','$nominigender','$relatives','$insurancename','$insuranceid','$agentname','$agentid','$branchid','$bankname','$accno','$ifsc','$type','$insuransed','$reneweldate');";
           //echo $sql;
           include 'dbconfig.php';
           if($conn->query($sql))
           {
               echo "<script>alert('Inserted Succesfully')</script>";
               echo "<meta http-equiv='refresh' content='0;agentviewinsurance'/>";  
      }   
      else{
           echo "<script>alert('Failed to insert')</script>";
              echo "<meta http-equiv='refresh' content='0;insurance'/>";  
      }
      }
      else{
          header("location:healthinsurance");
      }
        ?>
    


