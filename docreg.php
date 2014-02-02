<?php
include("/conn/conn.php");

if(@$_GET['action']=="register")
{
	
	$name=$_POST['name'];
	$fathername=$_POST['fathername'];
	$cnic=$_POST['cnic'];
	$cell=$_POST['cell'];
	$clinicaddress=$_POST['clinicaddress'];
	$city=$_POST['city'];
	$qualification=$_POST['qualification'];
	$specialization=$_POST['specialization'];
	$practice=$_POST['practice'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sel=mysql_query("select username from doctors where username='$username'") or die(mysql_error());
	$ss=mysql_num_rows($sel);
	if($ss>0)
	{
		$msg= "The Username you entered already Exist,Please choose another.";
	} else
	{
	
	
	$ins=mysql_query("INSERT INTO `oas`.`doctors` (`name`, `fathername`, `cnic`, `cell`,clinicaddress,city, `qualification`, `specialization`, `practice`, `gender`, `username`, `password`) VALUES ('$name', '$fathername', '$cnic', '$cell','$clinicaddress','$city', '$qualification', '$specialization', '$practice', '$gender', '$username', '$password');") or die(mysql_error());
	
	$msg= "Your Registration is Successful.";
    $msg1= "You will now be redirected to the login page<META HTTP-EQUIV = 'Refresh' Content = '5; URL =" . $sitebase ."doctorpanel/dtrlogin.php'> ";
	
	}
	}


?>

<?php include 'includes/header.php'; ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Registration Forms</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Registration Forms</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
			<div class="span6">
						<h2 class="short">Registration Forms</h2>
						<p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
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
 		<a href="sign-up.html" target="_self" title="Create an Account"><span style="color: #E2341D;">Not Registered?? Click Here</span></a>
 		</div>
 	
 	</form>
 
</div>
<div class="gradient"></div></div>
</div></div>
                        <div class="oas-layout-cell oas-content"><article class="oas-post oas-article">
                                <div class="oas-postmetadataheader">
                                        <h2 class="oas-postheader"><span class="oas-postheadericon">Register As Doctor</span></h2>
                                    </div>
                                                
                <div class="oas-postcontent oas-postcontent-0 clearfix"><div class="oas-content-layout">
    <div class="oas-content-layout-row">
    <div class="oas-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="oas-layout-cell" style="width: 50%" >
        <p><!--?php include("/conn/conn.php");="" if($_get['action']="="register")" {="" $name="$_POST['name'];" $fathername="$_POST['fathername'];" $cnic_passport="$_POST['cnic'];" $cell_phone="$_POST['cell'];" $gender="$_POST['gender'];" $qualification="$_POST['qualification'];" $specialization="$_POST['specialization'];" $practice="$_POST['practice'];" $username="$_POST['username'];" $password="$_POST['password'];" $ins="mysql_query("insert" into="" doctors="" (name,fathername,cnic,cell,gender,qualification,specialization,practice,username,password)values('$name','$fathername','$cnic','$cell','$gender','$qualification','$specialization','$practice','$username','$password')")="" or="" die(mysql_error());="" header("location:registrationdoctor.php");="" $msg="Registration Succesfull" ;="" }=""?-->
                
                
                
                
                
                
                
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <title>Untitled Document</title>
                </p>
                <p style="font-weight:bold; color:#CC0066;"><?php echo @$msg;?></p>
                <p><?php echo @$msg1;?></p>
                <p>Doctor's Registration</p>
                          <form id="form1" name="form1" method="post" action="doctorreg.php?action=register">
                            <table width="348" height="252" border="0">
                              <tbody><tr>
                                <td width="143" bgcolor="#FFFFFF">Doctor Name*</td>
                                <td width="195" bgcolor="#FFFFFF"><input value="" type="text" name="name" id="name"></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF">Father's Name</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="fathername" id="fathername"></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF"><p>CNIC/Passport#*</p></td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="cnic" id="cnic"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Cell#*</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="cell" id="cell"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Clinic Address</td>
                                <td bgcolor="#FFFFFF"><input type="text" name="clinicaddress" id="clinicaddress"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">City</td>
                                <td bgcolor="#FFFFFF"><input type="text" name="city" id="city"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Qualification</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="qualification" id="qualification"></td>
                              </tr>
                              <tr>
                                <td height="27" bgcolor="#FFFFFF">Specialization*</td>
                                <td bgcolor="#FFFFFF"><select name="specialization" id="select">
                                  <option>Select</option>
                                  <option>Cardialogist</option>
                                  <option>Dentist</option>
                                  <option>Gynecologist</option>
                                  <option>Arthopedix</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td height="27" bgcolor="#FFFFFF">Practice*</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="practice" id="practice"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Gender*</td>
                                <td bgcolor="#FFFFFF"><input type="radio" name="gender" id="radio" value="Male">
                                  <label for="gender">Male</label>
                                  <input type="radio" name="gender" id="radio2" value="female">
                                <label for="gender">Female</label></td>
                              </tr>
                              <tr>
                                <td height="30" bgcolor="#FFFFFF">Username*</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="username" id="username"></td>
                              </tr>
                              <tr>
                                <td height="30" bgcolor="#FFFFFF">Password*</td>
                                <td bgcolor="#FFFFFF"><input value="" type="password" name="password" id="password"></td>
                              </tr>
                              <tr>
                                <td height="28" colspan="2" align="right" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Register"></td>
                              </tr>
                              <tr>
                                <td height="28" colspan="2" align="right" bgcolor="#FFFFFF"><!--?php echo="" $msg;=""?--></td>
                              </tr>
                            </tbody></table>
                          </form>
										<h3>Pharmacy Form</h3>
										<label for="reg">Registration No</label>
										<input type="text" id="reg" placeholder="XXXXX">
										<label for="shopadd">Shop Address</label>
										<input type="text" id="shopadd" placeholder="Shop Address">
										<br>
										<input class="btn-primary btn" type="button" value="Submit">
										</div>
									</div>
								</div>
			
					</div>
				</div>
				<?php include 'includes/footer.php'; ?>