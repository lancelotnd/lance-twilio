<?php
require_once '/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC190046e06b0612f0f1be5beab91f7030";
$token = "a0e68c354c1a4d54021a99800a031040";

$client = new Client($sid, $token);

$response = new Twiml;
$dial = $response->dial();
$dial->conference('Room 123', array(
                'startConferenceOnEnter' => True,
                'endConferenceOnExit' => True
                ));
print $response;


//this is the part that make a call other participants and will  add them to the same conference room that caller is.
$call = $client->calls->create(
    "yourClient", "+14505002017",
    array("url" => "http://lancelotsystems.com/twilio-php-app/Conference.xml")
);
