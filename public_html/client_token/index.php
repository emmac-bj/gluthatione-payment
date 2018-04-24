<?php
$aCustomerId = "Something";
$clientToken = $gateway->clientToken()->generate([
    "customerId" => $aCustomerId
]);
echo $clientToken;
?>
