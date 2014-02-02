<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['doctor'];


?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US"><?php include("/includes/header.php"); ?>
<body>

<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Doctor Profile</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="schedule.php" class="active">Schedule</a></li>
<li><a href="appointments.php">Today's Appointments</a></li><li><a href="patients.php">Patients</a></li><li><a href="../doctorlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointments</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="appointments.html" target="_self" title="Check Patient Appointment Request">Check Appointments</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Schedule</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                <?php
				function getValue($col,$table,$condition){
					$qry="select ".$col." as mx from ".$table." where " . $condition . "" ;
					$rs= mysql_query($qry) or die ("query failed here");
					$ns= mysql_num_rows($rs);
				if ( $ns == 0 ) 
        			{
         			   return "Sorry";}
       				 else{ 
          			  $irow = mysql_fetch_array($rs);
            			return $irow['mx'];
        			}
					}

					if (isset($_GET['task']) && $_GET['task']=="del"){
						mysql_query("delete from reservations where patient_id='".$_GET['id']."'");
                                                include 'sms.php';
                                                ?>
                        
                       
                        
						<?php }?>
                  <table width="800" border="1">
                    <tr>
                      <th>Patient Name</th>
                      <th>Appointment Date</th>
                      <th>Appointment Time</th><th>action</th>
                    </tr>
                    <?php
                    $sel2=mysql_query("select * from reservations where doctor_id='$id'");
					while($ssw=mysql_fetch_array($sel2))
					{
					?>
                    <tr>
                      <td><a href="patientprescription.php?id=<?php echo $ssw['patient_id'];?>"><?php echo $ssw['patientname'];?></a></td>
                      <td><?php echo $ssw['date'];?></td>
                      <td><?php echo $ssw['time'];?></td>
                      <td><a href="?task=del&id=<?php echo $ssw['patient_id'];?>">cancel</a></td>
                    </tr>
                    <?php 
					}
					?>
                   
                  </table>
                  <p><br></p></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>