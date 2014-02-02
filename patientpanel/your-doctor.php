<?php 
session_start();
include("../conn/conn.php");
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}

$patient_id=$_SESSION['patient'];





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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="">Prescription</a></li><li><a href="reports.php" class="">Reports</a></li>
<li><a href="doctorselect.php" class="">Get an Appointment</a></li><li><a href="your-doctor.php" class="active">Your Doctor</a></li><li><a href="patient-feedback.php">Patient Feedback</a></li>
<li><a href="../patientlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.html" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Your Doctor</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                  <table width="800" border="1">
                    <tr>
                      <td>Patient Name</td>
                      <td>Doctor's Name</td>
                    </tr>
                    <?php
                    $sel=mysql_query("select * from prescription where patient_id='$patient_id'");
					while($ss=mysql_fetch_array($sel))
					{
					?>
                    <tr>
                      <td><?php echo $ss['name'];?></td>
                      <td><?php echo $ss['doctorname'];?></td>
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