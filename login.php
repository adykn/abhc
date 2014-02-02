<?php
session_start();
include("/conn/conn.php");
//login


	
	$username=$_POST['name'];
	$password=$_POST['password'];
if ($_POST['type']=='1'){
        
     $query=mysql_query("SELECT * FROM `doctors` where username='".$username."' and password='".$password."'") or die ("query failed here");
    if(mysql_num_rows($query) > 0)
        {   
           
	while($ss=mysql_fetch_array($query)){
		$userdb=$ss['username'];
		$passdb=$ss['password'];
                $id=$ss['id'];		
			 
				$_SESSION['doctor']=$id;
				$_SESSION['doctorname']=$userdb;
				header("location:doctorpanel/index.php");
			 
		}
        }
}else if ($_POST['type']=='2'){
        
     $query=mysql_query("SELECT * FROM `patients` where username='".$username."' and password='".$password."'") or die ("query failed here");
    if(mysql_num_rows($query) > 0)
        {   
           
	while($ss=mysql_fetch_array($query)){
		$userdb=$ss['username'];
		$passdb=$ss['password'];
                $id=$ss['id'];		
			 
				$_SESSION['patient']=$id;
				$_SESSION['patientname']=$userdb;
				header("location:patientpanel/profile.php");
			 
		}
        }
}else if ($_POST['type']=='3'){
        
     $query=mysql_query("SELECT * FROM `pharmacy` where username='".$username."' and password='".$password."'") or die ("query failed here");
    if(mysql_num_rows($query) > 0)
        {   
           
	while($ss=mysql_fetch_array($query)){
		$userdb=$ss['username'];
		$passdb=$ss['password'];
                $id=$ss['id'];		
			 
				$_SESSION['drugstore']=$id;
			$_SESSION['drugstorename']=$userdb;
			header("location:pharmacist/patient-id.php");
			 
		}
        }
}
?>
