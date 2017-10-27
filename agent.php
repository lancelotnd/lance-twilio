<?php
// Get the Twilio-PHP library from twilio.com/docs/libraries/php,
// following the instructions to install it with Composer.
require_once "vendor/autoload.php";

// Your Account SID from www.twilio.com/console
$accountSid = "AC190046e06b0612f0f1be5beab91f7030";
// Your Auth Token from www.twilio.com/console
$authToken = "a0e68c354c1a4d54021a99800a031040";
$workspaceSid = 'WS7049aaac0bb91a16bda876a28d16a4a7';

$workerSid = $_REQUEST['WKa5ca1c176da92384af3538e951e4550e'];

$workerCapability = new Twilio\Jwt\TaskRouter\WorkerCapability(
    $accountSid, $authToken, $workspaceSid, $workerSid);
$workerCapability->allowActivityUpdates();
$workerToken = $workerCapability->generateToken();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Care - Voice Agent Screen</title>
    <link rel="stylesheet" href="//media.twiliocdn.com/taskrouter/quickstart/agent.css"/>
    <script src="//media.twiliocdn.com/taskrouter/js/v1.8/taskrouter.min.js"></script>
    <script src="agent.js"></script>
</head>
<body>
<div class="content">
    <section class="agent-activity offline">
        <p class="activity">Offline</p>
        <button class="change-activity" data-next-activity="Idle">Go Available</button>
    </section>
    <section class="agent-activity idle">
        <p class="activity"><span>Available</span></p>
        <button class="change-activity" data-next-activity="Offline">Go Offline</button>
    </section>
    <section class="agent-activity reserved">
        <p class="activity">Reserved</p>
    </section>
    <section class="agent-activity busy">
        <p class="activity">Busy</p>
    </section>
    <section class="agent-activity wrapup">
        <p class="activity">Wrap-Up</p>
        <button class="change-activity" data-next-activity="Idle">Go Available</button>
        <button class="change-activity" data-next-activity="Offline">Go Offline</button>
    </section>
    <section class="log">
      <textarea id="log" readonly="true"></textarea>
    </section>
</div>
<script>
  window.workerToken = "<?= $workerToken ?>";
</script>
</body>
</html>
