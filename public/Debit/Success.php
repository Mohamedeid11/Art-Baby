<?php

$response = array();

if (isset($_GET['PaymentId'])) {

    $orderID = $_GET['orderID'];
    $clientID = $_GET['clientID'];
    $PaymentId = $_GET['PaymentId'];
    $amount = $_GET['amount'];
    
    header("Location: https://artbabybh.com/payment/success?orderID=" . $orderID . "&clientID=" . $clientID . "&PaymentId=" . $PaymentId . "&method=debit&amount=". $amount . "");

} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "هناك بيانات مفقوده برجاء مراجعة بياناتك";

    // echoing JSON response
    echo json_encode($response);
}
?>
