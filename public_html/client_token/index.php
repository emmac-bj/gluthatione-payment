<?php
require_once ('../../lib/Braintree.php');
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'fvky99ss46bby3jw',
    'publicKey' => 'm9psftrw4vtp4c3m',
    'privateKey' => '43dfe4f45110221cd9184cad88da75a9'
]);
$aCustomerId = "Something";
$clientToken = $gateway->clientToken()->generate([
    "customerId" => $aCustomerId
]);
echo $clientToken;
?>
