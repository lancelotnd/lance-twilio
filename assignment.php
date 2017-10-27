<?php

$assignment_instruction = [
  'instruction' => 'dequeue',
  'post_work_activity_sid' => '{WA9bb03b33359a99bbd29b8d04f275cc45}',
  'from' => '+14505002017' // a verified phone number from your twilio account
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);
