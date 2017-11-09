<?php
header("Content-Type: application/xml; charset=utf-8");
// make an associative array of callers we know, indexed by phone number
   $people = array(
       "+15813370030"=>"sebastien.mp3",
       "+15819893167"=>"laurent.mp3",
       "+15819955853"=>"Jimmy",
       "+14185646258"=>"Alexandre"
   );

   // if the caller is known, then greet them by name
   // otherwise, consider them just another monkey
   if(!$name = $people[$_REQUEST['From']])
       $name = "SylvainParé.mp3";

   // now greet the caller
   header("content-type: text/xml");
   echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>



<Response>
     <Play> <?php echo $name ?> </Play>
          <Play> patienter.mp3</Play>
          <Dial>
                <Number>+15819893167</Number>
          </Dial>
</Response>
