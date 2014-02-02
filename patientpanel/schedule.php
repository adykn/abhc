<?php
session_start();
include("../conn/conn.php");
$id=$_SESSION['doctor'];


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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="schedule.php" class="active">Schedule</a></li><li><a href="appointments.php">Appointments</a></li><li><a href="patients.php">Patients</a></li><li><a href="doctorlogin.php?action=logout">Logout</a></li></ul>
                
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
                  <table width="800" border="1">
                    <tr>
                      <td>Patient Name</td>
                      <td>Appointment Date</td>
                      <td>Appointment Time</td>
                    </tr>
                    <?php
                    $sel2=mysql_query("select * from doctors");
					while($ssw=mysql_fetch_array($sel2))
					{
					?>
                    <tr>
                      <td><a href="get-an-appointment.php?id=<?php echo $ssw['id'];?>"><?php echo $ssw['name'];?></a></td>
                      <td><?php echo $ssw['fathername'];?></td>
                      <td><?php echo $ssw['specialization'];?></td>
                    </tr>
                    <?php 
					}
					?>
                   
                  </table>
                  <p><br></p></div>
                                
                

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