<?php
session_start();
include("../conn/conn.php");
if($_GET['action']=="cardialogist")
{
	$sel=mysql_query("select * from doctors where specialization like 'cardialogist'")or die(mysql_error());
	
	}
	elseif($_GET['action']=="gynecologist")
	
	{	$sel=mysql_query("select * from doctors where specialization like 'gynecologist'")or die(mysql_error());
	
		
		}elseif($_GET['action']=="dentist")
	
	{	$sel=mysql_query("select * from doctors where specialization like 'dentist'")or die(mysql_error());
	
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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li>
<li><a href="prescription.php" class="active">Prescriptions</a></li>
<li><a href="reports.php">Reports</a></li>
<li><a href="doctorslist.php">Get an Appointment</a></li>
<li><a href="your-doctor.php">Your Doctor</a></li>
<li><a href="patient-feedback.php">Patient Feedback</a></li>
<li><a href="doctorlogin.php?action=logout">Logout</a></li></ul>
                
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
                  <table width="838" border="1">
                    <tr>
                      <td>Doctor's Name</td>
                      <td>Qualification</td>
                      <td>Medical Practice</td>
                      <td>Specialization</td>
                      <td>Clinic Address</td>
                      <td>City</td>
                    </tr>
                   <?php
                   while($ss=mysql_fetch_array($sel))
				   {
				   ?>
                    <tr>
                      <td><a href="get-an-appointment.php?id=<?php echo $ss['id'];?>"><?php echo $ss['name'];?></a></td>
                      <td><?php echo $ss['qualification'];?></td>
                      <td><?php echo $ss['practice'];?></td>
                      <td><?php echo $ss['specialization'];?></td>
                      <td><?php echo $ss['clinicaddress'];?></td>
                      <td><?php echo $ss['city'];?></td>
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