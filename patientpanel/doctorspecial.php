
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Register Now!</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.oas-content .oas-postcontent-0 .layout-item-0 {  border-collapse: separate;  }
.oas-content .oas-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; color: #1F2833; background: #F6F7F8 url('images/537ea.png') scroll; padding: 12px; border-radius: 15px;  }
.oas-content .oas-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; color: #1F2833; background: #F6F7F8 url('images/dc708.png') scroll; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 15px;  }
.oas-content .oas-postcontent-0 .layout-item-3 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; color: #1F2833; background: #F6F7F8 url('images/c735a.png') scroll; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 15px;  }
.ie7 .oas-post .oas-layout-cell {border:none !important; padding:0 !important; }
.ie6 .oas-post .oas-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="oas-main">
    <div class="oas-sheet clearfix">
<header class="oas-header">
<div class="oas-slider oas-slidecontainerheader" data-width="1918" data-height="250">
    <div class="oas-slider-inner">
<div class="oas-slide-item oas-slideheader0">
<div class="oas-slideheader0-object1182788310" data-left="100%"></div>

</div>
<div class="oas-slide-item oas-slideheader1">
<div class="oas-slideheader1-object983181683" data-left="100%"></div>

</div>
<div class="oas-slide-item oas-slideheader2">
<div class="oas-slideheader2-object1209327602" data-left="100%"></div>

</div>

    </div>
</div>
<div class="oas-slidenavigator oas-slidenavigatorheader" data-left="96.66">
<a href="#" class="oas-slidenavigatoritem"></a><a href="#" class="oas-slidenavigatoritem"></a><a href="#" class="oas-slidenavigatoritem"></a>
</div>



    <div class="oas-shapes">

            </div>
<h1 class="oas-headline" data-left="11.39%">
    <a href="#">Online Appointment System</a>
</h1>




<nav class="oas-nav">
    <ul class="oas-hmenu"><li><a href="home.html" class="">Home</a></li><li><a href="contact-us.php" class="">Contact Us</a></li><li><a href="about-us.php" class="">About Us</a></li><li><a href="sign-up.php" class="active">Sign Up</a></li></ul> 
    </nav>

                    
</header>
<div class="oas-layout-wrapper">
                <div class="oas-content-layout">
                    <div class="oas-content-layout-row">
                        <div class="oas-layout-cell oas-sidebar1"><div class="oas-block clearfix">
        <div class="oas-blockheader">
            <h3 class="t">Login</h3>
        </div>
        <div class="oas-blockcontent"><p><!--?php session_start();="" include("/conn/conn.php");="" login="" if($_get['action']="="patient-login"){" $username="$_POST['username'];" $password="$_POST['password'];" $sel="mysql_query("select" *="" from="" patients")="" or="" die(mysql_error());="" while($ss="mysql_fetch_array($sel)){" $userdb="$ss['username'];" $passdb="$ss['password'];" $id="$ss['id'];" if($username="=$userdb" &&="" $password="=$passdb){" $_session['patient']="$id;" $_session['patientname']="$userdb;" header("location:patients/patientpanel.php");="" }else{="" $msg="invalid username & password" ;="" }="" }="" }="" if($_get['action']="="logout"){" unset($_session['patient']);="" }=""?-->
 
 
 
 
 
 
 
 
 
 
 
</p>
 
 
 
 
 
 
<div id="wrapper">
 
 	<form name="login-form" class="login-form" action="patientlogin.php?action=patient-login" method="post" id="login-form">
 	
 		<div class="header">
 		<h1>Who Are You?</h1>
 		<p><span style="color: #E2341D;">Select From The List!</span></p>
 		<p style="text-align: left;"><span>
 		 <select name="URL" onchange="window.location.href=this.form.URL.options&#91;this.form.URL.selectedIndex&#93;.value"><option selected="selected">Patient</option><option value="doctorlogin.php">Doctor</option><option value="drugstorelogin.php">Drugstore</option></select>
 	 .</span></p>
 		<p><!--?php echo="" $msg;?=""?--></p>
</div>
 	
 		<div class="content">
 		<input value="" name="username" type="text" class="input username" placeholder="Username">
 		<div class="user-icon"></div>
 		<input value="" name="password" type="password" class="input password" placeholder="Password">
 		<div class="pass-icon"></div>		
 		</div>
 
 		<div class="footer">
 		<input type="submit" name="submit" value="Login" class="button">
 		<a href="sign-up.php" target="_self" title="Create an Account"><span style="color: #E2341D;">Not Registered?? Click Here</span></a>
 		</div>
 	
 	</form>
 
</div>
<div class="gradient"></div></div>
</div></div>
                        <div class="oas-layout-cell oas-content"><article class="oas-post oas-article">
                                <div class="oas-postmetadataheader">
                                        <h2 class="oas-postheader"><span class="oas-postheadericon">Select Department</span></h2>
                                    </div>
                                                
                <div class="oas-postcontent oas-postcontent-0 clearfix"><div class="oas-content-layout">
    <div class="oas-content-layout-row">
    <div class="oas-layout-cell" style="width: 100%" >
        <p>		<table>
        		
                  <tr>
                  <td><p style="text-align: center;"><span style="color: rgb(226, 52, 29); font-weight: bold; font-size: 24px;">Cardiology</span><br></p></td>
                  <td><p style="text-align: center;"><span style="color: rgb(226, 52, 29); font-weight: bold; font-size: 24px;">Dentistry</span><br></p></td>
                  <td><p style="text-align: center;"><span style="color: rgb(226, 52, 29); font-weight: bold; font-size: 24px;">gynecologist</span><br></p></td>
                </tr>
                <tr>
                  <td><img src="images/Body-Heart-Injury-icon.png" width="200" height="200"></td>
                  <td><img src="images/Body-Tooth-Anatomy-icon.png" width="200" height="200"></td>
                  <td><img src="images/Body-Embryo-icon.png" width="200" height="200"></td>
                </tr>
                <tr>
                  <td><p style="text-align: center;"><a href="doctorreg.php" target="_self" title="Registration of a cardiologist" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
                  <td><p style="text-align: center;"><a href="doctorreg.php" target="_self" title="Registration of a dentistry" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
                  <td><p style="text-align: center;"><a href="doctorreg.php" target="_self" title="Registration of a gynecologist" style="font-size: 20px; " class="oas-button">Click Here</a></p></td>
                </tr>
        </table>          
                  </p>
        
        
        
        
        
    </div>
    </div>
</div>

                  </div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="oas-footer">
<div class="oas-content-layout">
    <div class="oas-content-layout-row">
    <div class="oas-layout-cell layout-item-0" style="width: 50%">
        <p style="text-align: right;">Copyright © 2011-2012. All Rights Reserved.</p>
    </div><div class="oas-layout-cell layout-item-0" style="width: 50%">
        <p><a href="#">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Terms Of Use</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">About</a></p>
    </div>
    </div>
</div>

</footer>

    </div>
</div>


</body></html>