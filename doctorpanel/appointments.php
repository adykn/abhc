<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['doctor'];
if(empty($_SESSION['doctor'])){
	header("location:../doctorlogin.php");
}else{
	$_SESSION['doctor'];
}
//echo $id;

$today=date("d-m-y");




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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="schedule.php" class="">Schedule</a></li>
<li><a href="appointments.php" class="active">Today's Appointments</a></li><li><a href="patients.php">Patients</a></li><li><a href="../doctorlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointments</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="appointments.html" target="_self" title="Check Patient Appointment Request">Check Appointments</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Today's Appointments</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                  <table width="800" border="1" align="center">
                    <tr>
                      <td>Patient' Name</td>
                      <td>Today's Appointments</td>
                      <td>Time of Appointment</td>
                    </tr>
                    <?php
                    $sel=mysql_query("select * from reservations where doctor_id='$id' && date='$today'");
					while($ss=mysql_fetch_array($sel))
					{
					?>
                    <tr>
                      <td style="font-size:18px; font-weight:bold"; ><?php echo $ss['patientname'];?></td>
                      <td style="font-size:18px; font-weight:bold"; bgcolor="#CCFF00"><?php echo $ss['date'];?></td>
                      <td style="font-size:18px; font-weight:bold"; bgcolor="#00FF00"><?php echo $ss['time'];?></td>
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