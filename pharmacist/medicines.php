<?php
include("../conn/conn.php");

if(isset($_POST['submit']))
{
$textfield=$_POST['textfield'];
if($name!="")
{
$query=mysql_query("select * from patients where id='$id'");
if($query)
{
header("patientrecord.php");

}



?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Patient ID</title>
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



<style type="text/css">
.textbox {font-size: 26px}
</style>
</head>
<body>
<div id="ph-main">
    <div class="ph-sheet clearfix">
<header class="ph-header">
<div class="ph-slider ph-slidecontainerheader" data-width="1918" data-height="250">
    <div class="ph-slider-inner">
<div class="ph-slide-item ph-slideheader0">
<div class="ph-slideheader0-object942051170" data-left="100%"></div>

</div>
<div class="ph-slide-item ph-slideheader1">
<div class="ph-slideheader1-object393333714" data-left="100%"></div>

</div>
<div class="ph-slide-item ph-slideheader2">
<div class="ph-slideheader2-object332346898" data-left="100%"></div>
<div class="ph-slideheader2-object37087524" data-left="100%"></div>

</div>

    </div>
</div>
<div class="ph-slidenavigator ph-slidenavigatorheader" data-left="96.66">
<a href="#" class="ph-slidenavigatoritem"></a><a href="#" class="ph-slidenavigatoritem"></a><a href="#" class="ph-slidenavigatoritem"></a>
</div>



    <div class="ph-shapes">

            </div>
<h1 class="ph-headline" data-left="3.89%">
    <a href="#">Welcome Pharmacist</a>
</h1>




<nav class="ph-nav">
    <ul class="ph-hmenu"><li><a href="home.html">Home</a></li><li><a href="contact-us.php">Contact Us</a></li><li><a href="about-us.php">About Us</a></li></ul> 
    </nav>

                    
</header>
<div class="ph-layout-wrapper">
                <div class="ph-content-layout">
                    <div class="ph-content-layout-row">
                        <div class="ph-layout-cell ph-sidebar1"><div class="ph-vmenublock clearfix">
        <div class="ph-vmenublockheader">
            <h3 class="t">Pharmacist Profile</h3>
        </div>
        <div class="ph-vmenublockcontent">
<ul class="ph-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="patient-id.php" class="active">Patient ID</a></li></ul>
                
        </div>
</div></div>
                        <div class="ph-layout-cell ph-content"><article class="ph-post ph-article">
                                <div class="ph-postmetadataheader">
                                        <h2 class="ph-postheader"><span class="ph-postheadericon">Patient ID</span></h2>
                                    </div>
                                                
                <div class="ph-postcontent ph-postcontent-0 clearfix"><div class="ph-content-layout">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell" style="width: 100%" >
        <p style="text-align: center;"><span style="font-size: 26px; font-weight: bold; color: #6F8295;">Enter Patient ID</span></p>
        <table width="276" border="1" align="center">
          <tr>
            <td><input type="text" name="name" id="name"></td>
          </tr>
          <tr>
            <td width="266" height="28"><input type="submit" name="button" id="button" value="Submit"></td>
          </tr>
        </table>
        <p style="text-align: center;; color: #6F8295">&nbsp;    </p>
    </div>
    </div>
</div>
<div class="ph-content-layout">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="ph-layout-cell" style="width: 50%" >
        <p><br></p>
    </div><div class="ph-layout-cell" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="ph-footer">
<div class="ph-content-layout">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: right;">Copyright © 2011-2012. All Rights Reserved.</p>
    </div><div class="ph-layout-cell layout-item-0" style="width: 50%">
        <p><a href="#">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Terms Of Use</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">About</a></p>
    </div>
    </div>
</div>

</footer>

    </div>
</div>


</body></html>