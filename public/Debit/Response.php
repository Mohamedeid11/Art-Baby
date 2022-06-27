<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'plugin/iPayBenefitPipe.php';
$resourcePath = "resource/";
$keystorePath = "resource/";
$aliasName = "prod17350950";


$myObj = new iPayBenefitPipe();
$myObj->setAlias(trim($aliasName));
$myObj->setResourcePath(trim($resourcePath));
$myObj->setKeystorePath(trim($keystorePath)); //The method to be called for decrypting the response send by Payment Gateway


if (!empty(($_SERVER["QUERY_STRING"]))) {
    parse_str($_SERVER["QUERY_STRING"]);
} else {
    $trandata = isset($_GET["trandata"]) ? $_GET["trandata"] : isset($_POST["trandata"]) ? $_POST["trandata"] : "";
    $returnValue = $myObj->parseEncryptedRequest($trandata);

}

$Result = $myObj->getResult();
$PaymentId=$myObj->getPaymentId();
$TransId=$myObj->getTransId();
$Amt=$myObj->getAmt();
$clientID=$myObj->getUdf2();
$orderID=$myObj->getUdf3();




if ($Result == "CAPTURED") {
    echo("REDIRECT=https://artbabybh.com/Debit/Success.php?PaymentId=".$PaymentId.'&orderID='.$orderID.'&clientID='.$clientID.'&amount='.$Amt);
} else if ($Result == "NOT CAPTURED") {
    echo("REDIRECT=https://artbabybh.com/payment/failed?PaymentId=".$PaymentId.'&orderID='.$orderID.'&clientID='.$clientID.'&amount='.$Amt);
}else{
    echo("REDIRECT=https://artbabybh.com/payment/error?PaymentId=".$PaymentId.'&orderID='.$orderID.'&clientID='.$clientID.'&amount='.$Amt);
}


?>
