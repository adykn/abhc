<?php
session_start();
include("../conn/conn.php");
//
if(empty($_SESSION['patient'])){
	header("location:../patientlogin.php");
}else{
	$_SESSION['patient'];
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
<ul class="art-vmenu"><li><a href="profile.php" class="">Profile</a></li><li><a href="prescription.php" class="">Prescription</a></li><li><a href="reports.php" class="">Reports</a></li><li><a href="doctorslist.php" class="">Get An Appointment</a></li><li><a href="your-doctor.php" class="">Your Doctor</a></li><li><a href="patient-feedback.php" class="">Patient Feedback</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Appointment Request</h3>
        </div>
        <div class="art-blockcontent"><h2><a href="get-an-appointment.html" target="_self" title="Get an appointment">Get An Appointment With Us</a></h2></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Contact Us</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris.</p>
        
        <p>Cras elit nisl, rhoncus nec iaculis ultricies, feugiat eget sapien. Pellentesque ac felis tellus. Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices.</p>
        
        <h2>Our Address</h2>
        
        <p>586 Main Ave, Building 42<br />
        Main City, Country 12345-6789</p>
        
        <p>T: (555) 123 - 4567<br />
        F: (555) 523 - 4567</p>
        
        <p>W: <a href="http://www.domain.com">http://www.domain.com</a><br />
        E: <a href="mailto:email@domain.com">email@domain.com</a></p>
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