<?php 
include ("../conn/conn.php");
session_start();

$id=$_SESSION['drugstore'];
$sel=mysql_query("select * from pharmacy where id='$id'");
$ss=mysql_fetch_array($sel);

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
        <p style="text-align: center;"><span style="font-size: 26px; font-weight: bold; color: #6F8295;">My Profile</span></p>
    </div>
    </div>
</div>
<div class="ph-content-layout layout-item-0">
    <div class="ph-content-layout-row">
    <div class="ph-layout-cell layout-item-2" style="width: 25%" >
        <p><br></p>
    </div><div class="ph-layout-cell layout-item-2" style="width: 50%" >
        <p><p><p><p><form id="form1" name="form1" method="post" action="">
          <table width="398" border="1">
            <tr>
              <td width="182">Name</td>
              <td width="200"><?php echo $ss['name'];?></td>
            </tr>
            <tr>
              <td>Father Name</td>
              <td><?php echo $ss['fathername'];?></td>
            </tr>
            <tr>
              <td>Registration No</td>
              <td><?php echo $ss['regno'];?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo $ss['email'];?></td>
            </tr>
            <tr>
              <td>Shop Address</td>
              <td><?php echo $ss['shopaddress'];?></td>
            </tr>
            <tr>
              <td>Username</td>
              <td><?php echo $ss['username'];?></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><?php echo $ss['password'];?></td>
            </tr>
          </table>
          <br><br>
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