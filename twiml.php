<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml;
$response->say("Hello World!");

header("content-type: text/xml");
echo $response;
?>
