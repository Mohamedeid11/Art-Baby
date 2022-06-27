<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$amount = $_GET['amount'];


/* Request Processing*/
//Merchant can connect iPay Benefit Plugin with the below step
require('plugin/iPayBenefitPipe.php');
$myObj =new iPayBenefitPipe();
//initialization
$resourcePath = "resource/";
$keystorePath = "resource/";

$ResponseURL= "https://lily.emcan-group.com/test-payment/Response.php";

$errorURL= "https://lily.emcan-group.com/test-payment/Error.php";
$action="1"; // 1–Purchase
$aliasName = "prod16502950"; //Terminal Alias Name.
$currency = "048"; //Transaction Currency. (ex: “414”)
$language = "USA"; //(ex: “USA”)

$track_number=rand(1, 1000000);
$trackid = $track_number; //Merchant Track ID.
//User Defined Fields.

//Set Values
$myObj->setResourcePath($resourcePath);
$myObj->setKeystorePath($keystorePath);
$myObj->setAlias($aliasName);
$myObj->setAction( $action );
$myObj->setCurrency($currency);
$myObj->setLanguage($language);
$myObj->setResponseURL($ResponseURL );
$myObj->setErrorURL($errorURL);
$myObj->setAmt($amount);
$myObj->setTrackId($trackid);





/* For Bank Hosted Payment Integration, the method to be called is */
if(trim($myObj->performPaymentInitializationHTTP())!=0)
{
echo("ERROR OCCURED! SEE CONSOLE FOR MORE DETAILS");
return;
}else{
$url=$myObj->getwebAddress();
echo "<meta http-equiv='refresh' content='0;url=$url'>";
}
/* End of Request Processing*/


?>