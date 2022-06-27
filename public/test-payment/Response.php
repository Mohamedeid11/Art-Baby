<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require('plugin/iPayBenefitPipe.php');
$resourcePath = "resource/"; //Mandatory
$keystorePath = "resource/"; //Mandatory
//Terminal Alias Name in the merchant portal for the terminal 
$aliasName = "prod16502950";

$myObj = new iPayBenefitPipe();
$myObj->setAlias(trim($aliasName));
$myObj->setResourcePath(trim($resourcePath));
$myObj->setKeystorePath(trim($keystorePath)); //The method to be called for decrypting the response send by Payment Gateway


if (!empty(($_SERVER["QUERY_STRING"]))) {
    parse_str($_SERVER["QUERY_STRING"]);
} else {
    $trandata = isset($_GET["trandata"]) ? $_GET["trandata"] : isset($_POST["trandata"]) ? $_POST["trandata"] : "";
    $returnValue = $myObj->parseEncryptedRequest($trandata);
    //echo "Hii";
    //echo $trandata;
    //die();
}
$Result = $myObj->getResult();
$PaymentId = $myObj->getPaymentId();
$TransId = $myObj->getTransId();
$Amt = $myObj->getAmt();

$client_id = $myObj->getUdf4();
$client_address_id = $myObj->getUdf3();
$payment_type = $myObj->getUdf2();
$deliver_id = $myObj->getUdf5();


if ($Result == "CAPTURED") {

    echo("REDIRECT=https://lily.emcan-group.com/test-payment/Success.php?PaymentId=" . $PaymentId);
    
} else if ($Result == "NOT CAPTURED") {
    echo("REDIRECT=https://lily.emcan-group.com/test-payment/Failed.php?Result=" . $Result . '&PaymentId=' . $PaymentId);
} else {
    echo("REDIRECT=https://lily.emcan-group.com/test-payment/notfound.php?Result=" . $Result . '&PaymentId=' . $PaymentId);
}
//print_r($_post);

if (isset($_GET["ErrorText"])) {
    $ErrorText = $_GET["ErrorText"];
}
//case1:  If  the  return  value  from  this  method  is  "0" and  $_GET["ErrorText"] is null, then Merchant can get the decrypted data of the response fields.
if ($returnValue == 0 and ! isset($ErrorText)) {
//Ex:
//echo("REDIRECT=http://192.168.11.214/PG_NEW_FSS_2/Approved.php");
// echo("REDIRECT=https://aljazeeraroastery.com/payment/Error.php?Result=" . $Result.'&ErrorText='.$ErrorText);
}

//Case2: If $_GET["ErrorText"] is not null, then do the following to get response fields.
else if (isset($ErrorText)) {
//Ex:
//To get error
//$_GET["ErrorText"]
// To get Transaction ID 
//$_GET['tranid'] 
// To get Payment ID 
//$_GET['paymentid'] 
}
//Case3: If the return value from this method is not "0", then Merchant will get the error from below mentioned steps.
else if ($returnValue != 0) {
//Ex:
//To get error 
    $myObj->getError();
}

//Case4: If trandata is null, then merchant need to follow below step to get response fields from Payment Gateway.
else if ($returnValue != 0) {
//Ex:
//To get Error 
//$_GET["ErrorText"]
//To get Payment ID 
//$_GET['paymentid']; 
}
/* End of Response Processing */
/* End of Response Processing */
?>