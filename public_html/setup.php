<?php

require_once '../lib/Braintree.php';

// Instantiate a Braintree Gateway either like this:
$gateway = new Braintree_Gateway([
    'environment' => 'sandbox'
    'merchantId' => 'fvky99ss46bby3jw',
    'publicKey' => 'm9psftrw4vtp4c3m',
    'privateKey' => '43dfe4f45110221cd9184cad88da75a9'
]);
?>
