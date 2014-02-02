<?php
include("../conn/conn.php");
session_start();
$patient_id=$_SESSION['patient'];
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}


?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US"><?php include("/includes/header.php"); ?>
<body>

<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Patient Profile</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="active">Prescription</a></li><li><a href="reports.php">Reports</a></li>
<li><a href="doctorselect.php">Get an Appointment</a></li><li><a href="your-doctor.php">Your Doctor</a></li><li><a href="patient-feedback.php">Patient Feedback</a></li><li><a href="../patientlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.html" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Prescription</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                  <table width="700" border="1">
                    <tr>
                      <td width="212">Patient Name</td>
                      <td width="183">Prescriptions</td>
                      <td width="212">Morning</td>
                      <td width="183">Evening</td>
                      <td width="183">Night</td>
                      <td width="212">Timing</td> 
                    </tr>
                    <?php
                    $sel=mysql_query("select * from prescription where patient_id='$patient_id'");
					while($ss=mysql_fetch_array($sel))
					{
					?>
                    <tr>
                      <td><?php echo $ss['name'];?></td>
                      <td><?php echo $ss['prescription'];?></td>
                      <td><?php echo $ss['morning'];?></td>
                      <td><?php echo $ss['evening'];?></td>
                      <td><?php echo $ss['night'];?></td>
                      
                      <td><?php echo $ss['after'];?></td>
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