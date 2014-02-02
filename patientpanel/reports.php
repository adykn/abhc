<?php
session_start();
include("../conn/conn.php");
$patient_id=$_SESSION['patient'];
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}

if($_GET['action']=="delete"){
	$id=$_GET['id'];
	$sel=mysql_query("select * from pictures where id='$id'");
	$se=mysql_fetch_array($sel);
	echo $pic = $se['file'];
	unlink($pic);
	$del=mysql_query("delete from pictures where id='$id'");
	header("location:reports.php");
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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="">Prescription</a></li><li><a href="reports.php" class="active">Reports</a></li>
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
                                        <h2 class="art-postheader"><span class="art-postheadericon">Reports</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
               
                <table width="928" border="0" align="center">
  <tr>
    <td align="center"><a href="addreports.php" class="addpic">Add Reports</a></td>
  </tr>
  <tr>
    <td height="284" valign="top">
      <table width="164" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <?php
	  $sql=mysql_query("select * from reports where patient_id='$patient_id'");
	  $num=mysql_num_rows($sql);
	  $i=0;
	  while($i<$num){
		  if($col<4){
			$col++;  
	  ?>
        <td width="39" height="154" align="center"><p><a href="<?php echo mysql_result($sql,$i,"file"); ?>"><img src="<?php echo mysql_result($sql,$i,"file"); ?>" width="100px" height="100px"/></a></p>
          <p><a href="reports.php?action=delete&id=<?php echo mysql_result($sql,$i,"id")?>">Delete</a></p></td>
        <?php
		  }else{
			  echo "<tr>";
			  $col=0;
			  $i--;
		  }
	  $i++;
	  }
		?>
      </tr>
    </table>
    
    </td>
  
  </tr>
</table></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>