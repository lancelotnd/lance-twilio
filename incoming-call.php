<?php
header("Content-Type: application/xml; charset=utf-8");
?>

<Response>
  <Gather action="enqueue-call.php" numDigits="1" timeout="5">
    <Say language="fr">Merci d'avoir appeller Lancelot!/Say>
    <Say language="fr">Pour le français, faites le 1.</Say>
    <Say language="en">For English, please hold or press two.</Say>
  </Gather>
</Response>
