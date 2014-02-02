<?php
session_start();
include("../conn/conn.php");
$patient_id=$_SESSION['patient'];
$doctor_name=$_SESSION['doctorname'];
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
}

$doctor_id=$_GET['id'];
$sel=mysql_query("select * from doctors where id='$doctor_id'") or die(mysql_error());
$ss=mysql_fetch_array($sel);
$name=$ss['name'];
if($_GET['action']=="add")
{    
    $doctor_id=$_POST['doctor_id'];
	$name=$_POST['name'];
	$patientname=$_POST['patientname'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	
	 
	  

	 
	
	$checkAppointment =mysql_query("SELECT count(*) from reservations WHERE doctor_id='$doctor_id' && time='$time' && date='$date'") or die(mysql_error());
	$chk=mysql_query("SELECT count(*) from reservations WHERE doctor_id='$doctor_id' && patientname='$patientname' && date='$date'") or die(mysql_error());
	
	
$result = mysql_fetch_row($checkAppointment);
$rslt=mysql_fetch_row($chk);
$result = $result['0'];
$rslt=$rslt['0'];
if($result >0)

{	
	$msg="The time on which you are taking Appointment is already booked, Please select another time";
}
elseif($rslt>0)
{
	$msg="You have already booked your appointment today with this doctor";	
}

	
	
	
 else {
	 
	$ins=mysql_query("insert into reservations  (doctor_id,patientname,date,time,patient_id)values ('$doctor_id','$patientname','$date','$time','$patient_id')") or die(mysql_error());
	
	$msg="Your appointment is booked successfully";
	 
 }
 
	
	
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
<li><a href="doctorselect.php" class="active">Get an Appointment</a></li><li><a href="your-doctor.php">Your Doctor</a></li><li><a href="patient-feedback.php">Patient Feedback</a></li><li><a href="../patientlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.php" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Get An Appointment</span></h2>
                                    </div>
                                    
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                  <form name="form1" method="post" action="get-an-appointment.php?action=add">
                    <table width="532" border="1" align="center">
                      <tr>
                        <td colspan="2" style="font-weight:bold; color:#CC0066;"><?php echo $msg;?></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="hidden" name="doctor_id" id="doctor_id" value="<?php echo $doctor_id;?>"></td>
                      </tr>
                      <tr>
                        
                        
                        <td width="226"><input type="hidden" name="name" id="name" value="<?php echo $name;?>">
                         
                        
                    
                        
                        </td>
                      </tr>
                      <tr>
                        <td height="30">Patient Name</td>
                        <td><input type="text" name="patientname" id="patientname" value="<?php echo $_SESSION['patientname'];?>" required readonly></td>
                      </tr>
                      <tr>
                        <td>Select Appointment Date</td>
                        <td colspan="2"><input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly style="width: 165px; margin-left: 0px; border: 3px double #CCCCCC; padding:3px 10px;"/>
                        <input name="patient_id" type="hidden" value="<?php echo $patient_id; ?>" >                        </td>
                      </tr>
                      <tr>
                        <td>Select Appointment Time</td>
                        <td><select name="time" id="time">
                          <option>4pm</option>
                          <option>4:15pm</option>
                          <option>4:30pm</option>
                          <option>4:45pm</option>
                          <option>5:00pm</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td height="33"><input type="submit" name="button" id="button" value="Submit"></td>
                        <td></td>
                      </tr>
                    </table>
                  </form>
                  <p></p></div>
                                
                

</article></div>
                    </div>
                </div>
            </div><?php include("/includes/footer.php"); ?>

    </div>
</div>


</body></html>