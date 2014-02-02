<?php
session_start();
include("../conn/conn.php");
//
if(empty($_SESSION['drugstore'])){
	header("location:../drugstorelogin.php");
}else{
	$_SESSION['drugstore'];
}



?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><?php include("/includes/header.php"); ?>
<body>

<div class="ph-layout-wrapper">
                <div class="ph-content-layout">
                    <div class="ph-content-layout-row">
                        <div class="ph-layout-cell ph-sidebar1"><div class="ph-vmenublock clearfix">
        <div class="ph-vmenublockheader">
            <h3 class="t">Pharmacist Profile</h3>
        </div>
        <div class="ph-vmenublockcontent">
<ul class="ph-vmenu"><li><a href="profile.php" class="active">Profile</a></li><li><a href="patient-id.php">Patient ID</a></li><li><a href="../drugstorelogin.php?action=logout">Logout</a></li></ul>
                
        </div>
</div></div>
                        <div class="ph-layout-cell ph-content"><article class="ph-post ph-article">
                                <div class="ph-postmetadataheader">
                                        <h2 class="ph-postheader"><span class="ph-postheadericon">Profile</span></h2>
                                    </div>
                                                
                <div class="ph-postcontent ph-postcontent-0 clearfix"><div class="ph-content-layout layout-item-0">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell layout-item-1" style="width: 100%" >
        <p style="text-align: center;"><span style="font-size: 26px; font-weight: bold; color: #6F8295;">Enter Patient's ID</span></p>
    </div>
    </div>
</div>
<div class="ph-content-layout layout-item-0">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell layout-item-2" style="width: 25%" >
        <p><br></p>
    </div><div class="ph-layout-cell layout-item-2" style="width: 50%" >
        <p><p><p><p><form id="form1" name="form1" method="post" action="">
                                            <table width="200" border="0" style="margin-right: auto; margin-left: auto; ">
                                              <tbody>
                                              
                                                <tr><td><input value="" type="text" name="cnic" id="cnic"></td>
                                                <tr>
                                        <td height="28" colspan="2" align="right"><input type="submit" name="button" id="button" value="Submit"></td>
                                      </tr>
                
                                            </tr></tbody></table><br><br>
                                          </form></p>
        </p></p></p>
    </div><div class="ph-layout-cell layout-item-2" style="width: 25%" >
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