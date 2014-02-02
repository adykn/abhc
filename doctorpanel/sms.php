<?php
#====================================FOR DETAILS CONTACT US
#	Office: FF-04, first floor, deans trade center, Peshawar cantt.
#	Cell: 0333-9840815
#====================================FOR DETAILS CONTACT US



#======================* START - Smile API Class

CLASS SMILE_API
{
	
function get_session()
{
$username="8";	#Put your API Username here
$password="Sunshine8333";	#Put your API Password here
	
$data=file_get_contents("http://api.smilesn.com/session?username=".$username."&password=".$password);
$data=json_decode($data);
$sessionid=$data->sessionid;

$file2 = fopen('session.txt', 'w');

$file1 = fopen('session.txt', 'a');
fputs($file1, $sessionid);
fclose($file1);

return $sessionid;
}
	


function send_sms($receivenum, $sendernum, $textmessage)
{
$receivenum=urlencode($receivenum);
$sendernum=urlencode($sendernum);
$textmessage=urlencode($textmessage);


$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);

$data2=json_decode($data);
$response_status=$data2->status;

#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY

return $data;
}



function receive_sms()
{
$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);

$data2=json_decode($data);
$response_status=$data2->status;


#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY


return $data;
}
	
}
#======================* END - Smile API Class

$object_smile_api = new SMILE_API();
 $b="We are Sorry, Your Doctors Appoint is canceled thank you and have nice day.";
$status=$object_smile_api->send_sms('03339323452', "8333", $b);
echo $status;
//$object_smile_api->send_sms("03339277225", "8333", "HI !!!!");
//$data = $object_smile_api->receive_sms();
//$data2=json_decode($data);
//foreach($data2->status AS $data3) {
//	echo $data3->text. "";
//}

?>