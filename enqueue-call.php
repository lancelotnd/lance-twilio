<?php

$digit_pressed = $_REQUEST['Digits'];

if ($digit_pressed == '1') {
  $language = "fr";
} else {
  $language = "en";
}

header("Content-Type: application/xml; charset=utf-8");

?>

<Response>
  <Enqueue workflowSid="WW25179b77ce4678c8d7a30f2c35a35f15">
    <Task>{"selected_language": "<?= $language ?>"}</Task>
  </Enqueue>
</Response>
