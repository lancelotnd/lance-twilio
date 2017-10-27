<?php

$assignment_instruction = [
  'instruction' => 'accept'
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);  
