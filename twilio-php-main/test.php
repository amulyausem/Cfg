<?php
require __DIR__ . 'twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// In production, these should be environment variables.
$account_sid = 'AC5a4dc3153eae288b2a30de2afd4df383';
$auth_token = '2599be1a9827db778b2c59d0ef8502e5';
$twilio_number = "+12057821604"; // Twilio number you own
$client = new Client($account_sid, $auth_token);
// Below, substitute your cell phone
$client->messages->create(
    '+918805417345',  
    [
        'from' => $twilio_number,
        'body' => 'This message is Un-Composed'
    ] 


);
echo "succes";
?>