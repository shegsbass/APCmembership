<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "" && phoneNumber = "07019525473") {
	$response .= "CON You are a verified member, here is a recharge card reward from us. 559832740292\n";
    }else if ($text == "" && phoneNumber = "08118230396") {
	$response .= "CON You are a verified member, here is a recharge card reward from us. 628273947293\n";
}else{
	$response .= "CON Sorry, you are not one of us yet. Kindly visit your LGA to become a member.\n";
	}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;