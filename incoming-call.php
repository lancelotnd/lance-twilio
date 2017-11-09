<?php
header("Content-Type: application/xml; charset=utf-8");
// make an associative array of callers we know, indexed by phone number
   $people = array(
       "+15813370030"=>"Sebastien",
       "+15819893167"=>"Lancelot",
       "+15819955853"=>"Jimmy",
       "+14185646258"=>"Alexandre"
   );

   // if the caller is known, then greet them by name
   // otherwise, consider them just another monkey
   if(!$name = $people[$_REQUEST['From']])
       $name = "Customer";

   // now greet the caller
   header("content-type: text/xml");
   echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
   <Say>Hello <?php echo $name ?>.</Say>
</Response>




?>



<Response>
  <Gather action="enqueue-call.php" numDigits="1" timeout="5">
    <Say>Hello <?php echo $name ?>.</Say>
    <Say language="fr">Pour le français, faites le 1.</Say>
    <Say language="en">For English, please hold or press two.</Say>
  </Gather>
</Response>
