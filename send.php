<?php

$site = "painfreedental.com";
//$emailaddress = "";
$emailaddress = "rauraloss@gmail.com";


if (isset($_POST['email']))
  {//if "email" is filled out, proceed
  //check if the email address is invalid
  
  
    $to_email = "$emailaddress";
    $headers = "From: ".strtolower ($_POST['email'])."\r\nReply-To: ".strtolower ($_POST['email'])."\r\nCc: ".$cc_email."\r\n";

	$msg  = "NAME: ".$_POST['name']."\n";
	$msg .= "PHONE: ".$_POST['phone']."\n";
	$msg .= "COMMENTS: ".stripslashes ($_POST['message'])."\n\n\n";
	
	
	$msg .= "--- additional info ---\n";
	$msg .= "User-Agent: ".$_SERVER['HTTP_USER_AGENT']."\n";
	$msg .= "IP address: ".$_SERVER['REMOTE_ADDR']."\n";
	mail($to_email, "Contact from $site", $msg, $headers);
    header("Location: http://".$_SERVER['HTTP_HOST']."/lauraross/contact.php?alert=Your+contact+request+has+been+sent+successfully");

  }
?>