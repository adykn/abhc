<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['doctor'];
if(empty($_SESSION['doctor'])){
	header("location:../doctorlogin.php");
}else{
	$_SESSION['doctor'];
}



$sel=mysql_query("select * from doctors where id='$id'");
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
            <h3 class="t">Doctor Profile</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="profile.php" class="active">Profile</a></li><li><a href="schedule.php">Schedule</a></li>
<li><a href="appointments.php">Today's Appointments</a></li><li><a href="patients.php">Patients</a></li>
  <li><a href="../doctorlogin.php?action=logout">Logout</a></li>
</ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointments</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="appointments.html" target="_self" title="Check Patient Appointment Request">Check Appointments</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Profile</span> of Dr. <?php echo $_SESSION['doctorname'];?></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
       <form id="form" action="profile.php" name="form" method="post"> 
        <table width="450" border="1" align="center">
          <tr>
            <td width="236">Name</td>
            <td width="225"><?php echo $ss['name'];?></td>
          </tr>
          <tr>
            <td>Father Name</td>
            <td><?php echo $ss['fathername'];?></td>
          </tr>
          <tr>
            <td>Cnic#</td>
            <td><?php echo $ss['cnic'];?></td>
          </tr>
          <tr>
            <td>Cell#</td>
            <td><?php echo $ss['cell'];?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Qualification</td>
            <td><?php echo $ss['qualification'];?></td>
          </tr>
          <tr>
            <td>Specialization</td>
            <td><?php echo $ss['specialization'];?></td>
          </tr>
          <tr>
            <td>Practice</td>
            <td><?php echo $ss['practice'];?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><?php echo $ss['username'];?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><?php echo $ss['password'];?></td>
          </tr>
        </table> </form>
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