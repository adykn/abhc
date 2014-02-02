<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['patient'];
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}
if($_GET['action']=="add")
{
	$name=$_POST['name'];
	$feedback=$_POST['feedback'];
	$ins=mysql_query("insert into feedback (name,feedback)values('$name','$feedback')")or die(mysql_error());
	header("location:patient-feedback.php");
	
	
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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="">Prescription</a></li><li><a href="reports.php" class="">Reports</a></li>
<li><a href="doctorselect.php" class="">Get an Appointment</a></li>
<li><a href="your-doctor.php" class="">Your Doctor</a></li><li><a href="patient-feedback.php" class="active">Patient Feedback</a></li><li><a href="../patientlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.html" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Patient Feedback</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p></p><p></p><p><!--?php include("../conn/conn.php");="" include("patientpanel.php");="" if($_get['action']="="add")" {="" $feedback="$_POST['feedback'];" $ins="mysql_query("insert" into="" feedback="" (feedback)values="" ('$feedback')")or="" die(mysql_error);="" header("location:patientfeed.php");="" }=""?-->







<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>



</p><p>&nbsp;Enter Your Feed Back here</p>
<form id="form1" name="form1" method="post" action="patient-feedback.php?action=add">
  <p>&nbsp;</p>
  <table width="440" border="1" align="center">
    <tr>
      <td width="121">Name</td>
      <td width="286"><input type="text" name="name" id="name" value="<?php echo $_SESSION['patientname'];?>"></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><textarea name="feedback" id="feedback" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Submit"></td>
      </tr>
  </table>
<p>&nbsp;</p>
</form>
<p>&nbsp;</p>

<p></p><p></p><p></p></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>