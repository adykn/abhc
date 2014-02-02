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
                  <form name="form1" method="post" action="?action=add&id=<?php echo $_GET['id'];?>#bookmark">
                  
                 
                  
                                    
                    <table width="337" align="center">
      
                      <tr>
                        <td colspan="2"><a href="patientreports.php?id=<?php echo $ss['id'];?>" >
                          <input type="hidden" name="doctor_id" id="doctor_id" value="<?php echo $_SESSION['doctor'];?>">
                        </a></td>
                      
                      </tr>
                      <tr>
                        <td colspan="2"><a href="patientreports.php?id=<?php echo $ss['id'];?>" >
                          <input type="hidden" name="doctorname" id="doctorname" value="<?php echo $_SESSION['doctorname'];?>">
                        </a></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input type="hidden" name="patient_id" id="patient_id" value="<?php echo $sss['id'];?>"></td>
                      </tr>
                       <?php 
					$sel=mysql_query("select * from patients where id='$patient_id'");
					while($ss=mysql_fetch_array($sel))
					{
					?>
                      <tr>
                        <td colspan="2"><a href="patientreports.php?id=<?php echo $ss['id'];?>" >Click to view reports</a></td>
                      </tr>
                        <?php
                     			  
					}
					  ?>
                       <tr>
                        <td>Patient Name</td>
                       <td><input type="text" name="name" id="name" value="<?php echo $name;?>"></td>
                      </tr>
   <table id="entry1" class="clonedInput" >            
                  <tr>
                  <td><h2 id="reference" name="reference" class="heading-reference">Entry #1</h2></td>
                  </tr>
                  <tr>
                        <td>Patient Name</td>
                       <td><input type="text" name="name" id="name" value="<?php echo $name;?>"></td>
                      </tr>
                     <tr>
                     	<td><label class="label_m" for="morning">Morning:</label></td>
                        <td>
                    
                    <select class="select_m" name="morning" id="morning">
                            <option value="-" selected="selected" >
                                -
                            </option>

                            <option value="1">
                                1
                             </option>
                        </select><!-- end .select_ttl -->
                
                </td>
               </tr>
                <tr>
                      <td><label class="label_e" for="evening">Evening:</label></td>
                      <td>
                    
                    <select class="select_e" name="evening" id="evening">
                            <option value="-" selected="selected" >
                                -
                            </option>

                            <option value="1">
                                1
                            </option>
                        </select><!-- end .select_ttl -->
                
                
                      </td>
                </tr>
                <tr>
                		<td><label class="label_n" for="n">Night:</label></td>
                      <td>
                    <select class="select_n" name="night" id="night">
                            <option value="-" selected="selected">
                                -
                            </option>

                            <option value="1">
                                1
                            </option>
                        </select><!-- end .select_ttl -->
                
                      </td>
                 </tr>
                 <tr>
                      <td><label class="label_a" for="after">After:</label></td>
                      <td>
                    
                    <select class="select_a" name="after" id="after">
                            <option value="-" selected="selected" >
                                -
                            </option>

                            <option value="1 hour">
                                1 hour
                            </option>

                            <option value="2 hour">
                                2 hour
                            </option>

                            <option value="3 hour">
                               3 hour
                            </option>

                            <option value="4 hour">
                               4 hour
                            </option>
                            <option value="5 hour">
                               5 hour
                            </option>
                            <option value="6 hour">
                               6 hour
                            </option>
                            <option value="7 hour">
                               7 hour
                            </option>
                            <option value="8 hour">
                               8 hour
                            </option>
                            <option value="9 hour">
                               9 hour
                            </option>
                            <option value="10 hour">
                               10 hour
                            </option>
                            <option value="11 hour">
                               11 hour
                            </option>
                            <option value="12 hour">
                               12 hour
                            </option>
                        </select><!-- end .select_ttl -->
             
                      </td>
                      </tr>

                    
                    
                    
                    
                      <tr>
                        <td ><label class="label_p" for="prescription">Prescription:</label></td>
                        <td ><textarea class="select_p" name="prescription" id="prescription" cols="45" rows="5"></textarea></td>
                      </tr>
  </table>                  
                   <tr>
                     <td><input type="hidden" id="btnAdd" value="add section"></td>
                     <td> <input type="hidden" id="btnDel" value="remove section above"></td>
                     </tr>
                  
                      <tr>
                        <td colspan="2"><input type="submit" name="button" id="button" value="Done"></td>
                      </tr>
                      <tr>
                        <td height="32" colspan="2"><?php echo $msg;?></td>
                      </tr>
                    </table>
                  </form>
                 
             
                                </div>
   <a name="bookmark">             
  <table width="337" align="center">
  <tr><th>S.N</th><th>Medicine</th><th>Morning</th><th>Evening</th><th>Night</th><th> Action </th></tr>
  <?php 
  $x=1; 
  if (isset($_GET['task']) && $_GET['task'] =='del'){
	  mysql_query("delete from prescription where id='".$_GET['pid']."'");
	  }
 $sel2=mysql_query("select * from prescription where patient_id='".$patient_id."'");
					while($ssw=mysql_fetch_array($sel2)){?>
   <tr><td><?php echo $x;?></td><td><?php echo $ssw['prescription'];?></td><td><?php echo $ssw['morning'];?></td><td>
   <?php echo $ssw['evening'];?>
   </td><td><?php echo $ssw['night'];?></td> <td align="center"><a href="?task=del&pid=<?php echo $ssw['id'];?>&id=<?php echo $_GET['id'];?>&#bookmark">Remove</a></td></tr>
   <?php $x=$x+1;}?>
   </table>
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