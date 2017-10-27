<?php
// Get the Twilio-PHP library from twilio.com/docs/libraries/php,
// following the instructions to install it with Composer.
require_once "vendor/autoload.php";
use Twilio\Rest\Client;

// put your Twilio API credentials here
$accountSid = 'AC190046e06b0612f0f1be5beab91f7030';
$authToken  = 'a0e68c354c1a4d54021a99800a031040';

// Set your WorkspaceSid and WorkflowSid
$workspaceSid = 'WS7049aaac0bb91a16bda876a28d16a4a7';
$workflowSid = 'WW25179b77ce4678c8d7a30f2c35a35f15';

// instantiate a new Twilio Rest Client
$client = new Client($accountSid, $authToken);

// create a new task
$task = $client->taskrouter
    ->workspaces($workspaceSid)
    ->tasks
    ->create('{"selected_language": "fr"}', $workflowSid);

// display a confirmation message on the screen
echo "Created a new task";
