
<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("dummy",$conn);
if($_GET['action']=="add")
{

$today = date("Y-m-d"); 
$input=$_POST['date'];
$date = substr($input,0,4) . '-' . 
str_pad(substr($input,5,2), '0', 2, STR_PAD_LEFT) . '-' .
str_pad(substr($input,8,2), '0', 2, STR_PAD_LEFT);
if ($date < $today) {
$msg="You cannot book appointment on previous date";
} else {
 $ins=mysql_query("insert into schedule(time,date)values('$time','$date')");
 header("location:untitl.php");
 $msg=$_SESSION['Your appointment is book successfully'];
 
}
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      
<title>Untitled Document</title>

<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<script>
$(function() {
$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
});

</script>
<link href="../js/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="n" method="post" action="untitl.php?action=add">
  <p>
  <input type=text placeholder="yyyy-mm-dd" id="datepicker" name="date" value="">
    
  <input type=submit>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="800" border="1" align="center">
    <tr>
      <td><?php echo $msg; ?></td>
    </tr>
  </table>
  <p><br>
  </p>
</form>
</body>
</html>