<?php
// *************************************************************************** //
// ** Simple PHP example that sends a HTTP POST to a remote site using cURL ** //
// **                         This is test method                           ** //
// *************************************************************************** //

///Declare Variables
$user 		= "";
$password 	= "";
$apiId 		= "";

///Open Phone Number file
$myfile = fopen("phoneNumber.txt", "r") or die("Unable to open file!");
$phoneNumber = fread($myfile,filesize("phoneNumber.txt"));
fclose($myfile);

///Open Message file
$myMessage = fopen("message.txt", "r") or die("Unable to open file!");
$messages = fread($myMessage,filesize("message.txt"));
fclose($myMessage);

///Append value into variable
$post_data = "user=".$user."&password=".$password."&api_id=".$apiId."&to=".$phoneNumber."&text=".$messages;


///Execute cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://api.clickatell.com/http/sendmsg?");	///The API URL
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);

///Receive server response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

// *************************************************************************** //
// **                         This is test method                           ** //
// *************************************************************************** //
?>


<!-- /However, I found another way to do this -->


<?php
// ********************************************************************************* //
// ** Simple PHP example that sends a HTTP POST to a remote site using PHP Header ** //
// **                            This is test method                              ** //
// ********************************************************************************* //

// header('Location:http://api.clickatell.com/http/sendmsg?user=fxbitlab&password=event2017&api_id=3637805&to='.$phoneNumbers.'&text=Message');

// ********************************************************************************* //
// **                            This is test method                              ** //
// ********************************************************************************* //
?>