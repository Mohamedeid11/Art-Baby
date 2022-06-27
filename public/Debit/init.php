<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$amount = $_GET['amount'];

/** Request Processing**/
//Merchant can connect iPay Benefit Plugin with the below step
require('plugin/iPayBenefitPipe.php');
$myObj =new iPayBenefitPipe();
//initialization
$resourcePath = "resource/";
$keystorePath = "resource/";

$ResponseURL = "https://artbabybh.com/Debit/Response.php";

$errorURL = "https://artbabybh.com/Debit/Error.php";

$action = "1";
$aliasName = "prod17350950";
$currency = "048";
$language = "USA";

$track_number=rand(1, 1000000);
$trackid = $track_number; //Merchant Track ID.
//User Defined Fields.
$Udf2= $_GET['clientID'];
$Udf3= $_GET['orderID'];
$Udf4="Udf4";
$Udf5="Udf5";
//Set Values
$myObj->setResourcePath($resourcePath);
$myObj->setKeystorePath($keystorePath);
$myObj->setAlias($aliasName);
$myObj->setAction($action);
$myObj->setCurrency($currency);
$myObj->setLanguage($language);
$myObj->setResponseURL($ResponseURL);
$myObj->setErrorURL($errorURL);
$myObj->setAmt($amount);
$myObj->setTrackId($trackid);
$myObj->setUdf2($Udf2);
$myObj->setUdf3($Udf3);
$myObj->setUdf4($Udf4);
$myObj->setUdf5($Udf5);


/** For Bank Hosted Payment Integration, the method to be called is **/
if(trim($myObj->performPaymentInitializationHTTP())!=0)
{
echo("ERROR OCCURED! SEE CONSOLE FOR MORE DETAILS");
return;
}else{
$url=$myObj->getwebAddress();
echo "<meta http-equiv='refresh' content='0;url=$url'>";
}
/** End of Request Processing**/


?>