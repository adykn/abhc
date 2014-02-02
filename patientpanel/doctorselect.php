<?php
session_start();
include("../conn/conn.php");
//
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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="">Prescription</a></li><li><a href="reports.php" class="">Reports</a></li><li><a href="doctorslist.php" class="">Get An Appointment</a></li><li><a href="your-doctor.php" class="">Your Doctor</a></li><li><a href="patient-feedback.php" class="">Patient Feedback</a></li>
  <li><a href="../index.php?action=logout" class="">Logout</a></li>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.html" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Contact Us</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
 		<form name="form1" method="post" action="">
       
        <table align="center">
          <tr>
            <td><p style="text-align: center;"><span style="color: #5B7B9F; font-weight: bold; font-size: 16px;">Cardiology</span><br>
            </p></td>
            <td><p style="text-align: center;"><span style="color: #5B7B9F; font-weight: bold; font-size: 16px;">Dentistry</span><br>
            </p></td>
            <td><p style="text-align: center;"><span style="color: #5B7B9F; font-weight: bold; font-size: 16px;">Gynecologist</span><br>
            </p></td>
          </tr>
          <tr>
            <td><a href="doctorslist.php?action=cardialogist"> <img src="images/Body-Heart-Injury-icon.png" alt="" width="150" height="150"></a></td>
            <td><a href="doctorslist.php?action=dentist"><img src="images/Body-Tooth-Anatomy-icon.png" alt="" width="150" height="150"></a></td>
            <td><a href="doctorslist.php?action=gynecologist"><img src="images/Body-Embryo-icon.png" alt="" width="150" height="150"></a></td>
          </tr>
          <tr>
            <td><p style="text-align: center;"><a href="../doctorreg.php" target="_self" title="Registration of a cardiologist" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
            <td><p style="text-align: center;"><a href="../doctorreg.php" target="_self" title="Registration of a dentistry" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
            <td><p style="text-align: center;"><a href="../doctorreg.php" target="_self" title="Registration of a gynecologist" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
          </tr>
        </table>
      </form>
      
      <p>&nbsp;</p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>