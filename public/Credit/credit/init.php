<?php
$response = array();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$con = mysqli_connect("localhost","artbabybh_system","&r74B!ymvS9I","artbabybh_system");

?>
<html>
    <head>
        <style>
            .spinner {
                width: 40px;
                height: 40px;
                background-color: #333;

                margin: 100px auto;
                -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
                animation: sk-rotateplane 1.2s infinite ease-in-out;
            }

            @-webkit-keyframes sk-rotateplane {
                0% { -webkit-transform: perspective(120px) }
                50% { -webkit-transform: perspective(120px) rotateY(180deg) }
                100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
            }

            @keyframes sk-rotateplane {
                0% {
                    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
                } 50% {
                    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
                } 100% {
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                }
            }
        </style>
    <div class="">Please wait...</div>

    <div class="spinner"></div>

    <?php
    $client_id = $_GET['client_id'];
    $orderID = $_GET['orderID'];

    $amount = number_format((float) (round($_GET['amount'], 2)), 3, '.', '');
    if ($amount == "0") {
        echo "Please Update App First !";
    } else {
        $ch = curl_init();
        // $orderID = mt_rand();
        curl_setopt($ch, CURLOPT_URL, 'https://credimax.gateway.mastercard.com/api/rest/version/57/merchant/E17350950/session');
        curl_setopt($ch, CURLOPT_USERPWD, 'merchant.E17350950' . ":" . 'b541a8f17ca3d2a91cf2739de2e2368c');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,'{
            "order": { "id": ' . $orderID . ', "currency": "BHD" },
            "apiOperation": "CREATE_CHECKOUT_SESSION",
            "interaction": {
                "operation": "PURCHASE",
                "returnUrl": "https://artbabybh.com/payment/credit/response?orderID=' . $orderID  . '&clientID='. $client_id .'"
                }
            }'
        );


        $result = curl_exec($ch);

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers[] = 'Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With';
        $headers[] = 'Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS';
        $headers[] = 'Access-Control-Allow-Origin: *';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if ($result === false) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
        $result = json_decode($result);
        $ssID = $result->session->id;
        $successIndicator = $result->successIndicator;
        $version = $result->session->version;
        mysqli_query($con, "INSERT INTO payment (client_id,order_id,transaction_number,payment_id,result_indicator,value,result,payment_type,date)
            VALUES('$client_id','$orderID','$orderID','$ssID','$successIndicator','$amount','','credit','" . date("Y-m-d H:i:s") . "')");
    }
    ?>

    <script src="https://credimax.gateway.mastercard.com/checkout/version/57/checkout.js"
            data-error="errorCallback"
            data-cancel="cancelCallback"
            data-complete="completeCallback"
            >
    </script>
    <script type="text/javascript">



        function errorCallback(error) {
            console.log(JSON.stringify(error));
            window.location.href = 'https://artbabybh.com/payment/error?orderID=<?=$orderID?>&clientID=<?=$client_id?>';

        }
        function cancelCallback() {
            console.log('Payment cancelled');
            window.location.href = 'https://artbabybh.com/payment/failed?orderID=<?=$orderID?>&clientID=<?=$client_id?>';
        }



        Checkout.configure({
            merchant: 'E17350950',
            session: {
                id: "<?php echo $ssID; ?>"
            },
            order: {
                amount: '<?php echo $amount; ?>',
                currency: 'BHD',
                description: 'ART',
                id: '<?php echo $orderID; ?>'
            },
            interaction: {
                operation: 'AUTHORIZE',
                merchant: {
                    name: 'ART',
                    address: {
                        line1: '200 Sample St',
                        line2: '1234 Example Town'
                    }
                }
            }
        }
        );
        Checkout.showPaymentPage();
    </script>
</head>
</html>
