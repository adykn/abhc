<?php
session_start();
include("../conn/conn.php");
$doctorname=$_SESSION['doctorname'];
$patient_id=$_GET['id'];
$sell=mysql_query("select * from patients where id='$patient_id'")or die(mysql_error());
$sss=mysql_fetch_array($sell);
$name=$sss['name'];
if($_GET['action']=="add")
{	
	
	$doctor_id=$_POST['doctor_id'];
	$doctorname=$_POST['doctorname'];
	$patient_id=$_POST['patient_id'];
	$name=$_POST['name'];
	$prescription=$_POST['prescription'];
	$morning=$_POST['morning'];
	$evening=$_POST['evening'];
	$night=$_POST['night'];
	$after=$_POST['after'];
	$treated=$_POST['treated'];
	if(!empty($doctor_id) && !empty($doctorname) && !empty($patient_id) && !empty($name)){
	$ins=mysql_query("insert into prescription (doctor_id,doctorname,patient_id,name,prescription,morning,evening,night,after,treated)values('$doctor_id','$doctorname','$patient_id','$name','$prescription','$morning','$evening','$night','$after','$treated')") or die(mysql_error());
	
	$msg="Prescribed Successfully";
	}  
	}
	
    
	

// && !empty($treated) && !empty($prescription)



?>






<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Schedule</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="keywords" content="online appointment system, appointment system, appointment, health department">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</script>
    <script type="text/javascript">
    // if Google is down, it looks to local file...
if (typeof jQuery == 'undefined') {
    document.write(unescape("%3Cscript src='jquery-1.9.1.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    <script type="text/javascript" src="clone-form-td.js"></script>

</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header">
<div class="art-slider art-slidecontainerheader" data-width="1918" data-height="250">
    <div class="art-slider-inner">
<div class="art-slide-item art-slideheader0">
<div class="art-slideheader0-object942051170" data-left="100%"></div>

</div>
<div class="art-slide-item art-slideheader1">
<div class="art-slideheader1-object393333714" data-left="100%"></div>

</div>
<div class="art-slide-item art-slideheader2">
<div class="art-slideheader2-object332346898" data-left="100%"></div>
<div class="art-slideheader2-object37087524" data-left="100%"></div>

</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigatorheader" data-left="96.66">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    <div class="art-shapes">

            </div>
<h1 class="art-headline" data-left="3.16%">
    <a href="#">Welcome Doctor</a>
</h1>




<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="home.html">Home</a></li><li><a href="contact-us.php">Contact Us</a></li><li><a href="about-us.php">About Us</a></li></ul> 
    </nav>

                    
</header>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Doctor Profile</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="schedule.php" class="active">Schedule</a></li><li><a href="appointments.php">Appointments</a></li><li><a href="patients.php">Patients</a></li><li><a href="../doctorlogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointments</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="appointments.html" target="_self" title="Check Patient Appointment Request">Check Appointments</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Write Prescription to Patient</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                  <form name="form1" method="post" action="patientprescription.php?action=add">
                    <table id="dataTable" class="form" border="1">
                      <tbody>
                        <?php foreach($BX_NAME as $a => $b){ ?>
                        <tr>
                          <p>                    
                          <td ><?php echo $a+1; ?></td>
                          <td><label>Name</label>
                            <input type="text" readonly name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>"></td>
                          <td><label for="BX_age">Age</label>
                            <input type="text" readonly class="small"  name="BX_age[]" value="<?php echo $BX_age[$a]; ?>"></td>
                          <td><label for="BX_gender">Gender</label>
                            <input type="text" readonly name="BX_gender[]" value="<?php echo $BX_gender[$a]; ?>"></td>
                          <td><label for="BX_birth">Berth Pre</label>
                            <input type="text" readonly name="BX_birth[]" value="<?php echo $BX_birth[$a]; ?>"></td>
                          </p>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </form>
                 
             
                                </div>
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: right;">Copyright © 2011-2012. All Rights Reserved.</p>
    </div><div class="art-layout-cell layout-item-0" style="width: 50%">
        <p><a href="#">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Terms Of Use</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">About</a></p>
    </div>
    </div>
</div>

</footer>

    </div>
</div>


</body></html>