<?php

$response = array();
// include db connect class
require_once __DIR__ . '/../system/api/db_connect.php';
require_once __DIR__ . '/../system/api/add-order.php';

// connecting to db
$db = new DB_CONNECT();

mysql_query("SET NAMES 'utf8'");

mysql_query("SET CHARACTER SET utf8");

mysql_query("SET SESSION collation_connection = 'utf8_unicode_ci'");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');


if (isset($_GET['client_id'])) {

    $client_id = $_GET['client_id'];
    $session_id = $_GET['session_id'];
    
    $order_id = $_GET['order_id'];

    if(isset($order_id) && $order_id !=''){
        addOrder($order_id, $session_id);
    }
    $result = mysql_query("SELECT * FROM `payment` WHERE `payment_id`='$session_id' and `client_id`='$client_id'");

// check for empty result
    if (mysql_num_rows($result) > 0) {
        // looping through all results
        // products node
        $response["product"] = array();

        while ($row = mysql_fetch_array($result)) {


            $product = array();

            $product["client_id"] = $row["client_id"];
            $product["result_indicator"] = $row["result"];
            $product["session_id"] = $row["payment_id"];
            $product["value"] = $row["value"];

            // push single product into final response array
            array_push($response["product"], $product);
        }
          // success
        $response["success"] = 1;

        // echoing JSON response
        echo json_encode($response);
    } else {

        $response["product"] = array();

        // temp user array
        $product = array();

        // success
        $response["success"] = 0;
        $response["message"] = "عفوا ، لقد حدث خطأ";

        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "هناك بيانات مفقوده برجاء مراجعة بياناتك";

    // echoing JSON response
    echo json_encode($response);
}
?>