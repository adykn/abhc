<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['patient'];
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}
$sel=mysql_query("select * from patients where id='$id'");
$ss=mysql_fetch_array($sel);
  
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
<ul class="art-vmenu"><li><a href="profile.php" class="active">Profile</a></li><li><a href="prescription.php">Prescription</a></li><li><a href="reports.php">Reports</a></li>
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
                                        <h2 class="art-postheader"><span class="art-postheadericon">Profile Of </span> <?php echo $_SESSION['patientname'];?></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
        <table width="509" border="1" align="center">
          <tr>
            <td width="364">Name</td>
            <td width="420"><?php echo $ss['name'];?></td>
          </tr>
          <tr>
            <td>Father Name</td>
            <td><?php echo $ss['fathername'];?></td>
          </tr>
          <tr>
            <td>CNIC#</td>
            <td><?php echo $ss['cnic'];?></td>
          </tr>
          <tr>
            <td>Cell#</td>
            <td><?php echo $ss['cell'];?></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td><?php echo $ss['dob'];?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?php echo $ss['age'];?></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><?php echo $ss['country'];?></td>
          </tr>
          <tr>
            <td>City</td>
            <td><?php echo $ss['city'];?></td>
          </tr>
          <tr>
            <td>District</td>
            <td><?php echo $ss['district'];?></td>
          </tr>
          <tr>
            <td>Bloog Group</td>
            <td><?php echo $ss['bloodgroup'];?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $ss['email'];?></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><?php echo $ss['country'];?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><?php echo $ss['username'];?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><?php echo $ss['password'];?></td>
          </tr>
        </table>
        <p><br></p>
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