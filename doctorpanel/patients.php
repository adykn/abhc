<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['doctor'];
if(empty($_SESSION['doctor'])){
	header("location:../doctorlogin.php");
}else{
	$_SESSION['doctor'];
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
            <h3 class="t">Doctor Profile</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="schedule.php" class="">Schedule</a></li>
<li><a href="appointments.php" class="">Today's Appointments</a></li><li><a href="patients.php" class="active">Patients</a></li><li><a href="../doctorlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointments</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="appointments.php" target="_self" title="Check Patient Appointment Request">Check Appointments</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Patients</span> Treated</h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><table width="535" border="1" align="center">
                    <tr>
                      <td>Patient Name</td>
                      <td>Date of treatment</td>
                      <td colspan="2">Treated Patients</td>
                    </tr>
                    <?php
                    $sel2=mysql_query("SELECT prescription.`name` , prescription.`treated` , reservations.`date` 
FROM prescription
JOIN reservations ON prescription.doctor_id = reservations.doctor_id
WHERE prescription.doctor_id ='$id'");
					while($ssw=mysql_fetch_array($sel2))
					{
					?>
                    <tr>
                      <td><?php echo $ssw['name'];?></a></td>
                      <td><?php echo $ssw['date'];?></td>
                      <td><?php echo $ssw['treated'];?></td>
                     
                    </tr>
                    <?php 
					}
					?>
                  </table><p><br></p></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>