<?php
	// The PHP Twilio helper library. Get it here http://www.twilio.com/docs/libraries/
	require_once('twilio.php');

	$API_VERSION = '2010-04-01';
	$ACCOUNT_SID = 'AC190046e06b0612f0f1be5beab91f7030';
	$AUTH_TOKEN = 'a0e68c354c1a4d54021a99800a031040';

	$client = new TwilioRestClient($ACCOUNT_SID, $AUTH_TOKEN);

	// The phone numbers of the people to be called
	$participants = array('+15819893167', '+15813370030');

	// Go through the participants array and call each person.
	foreach ($participants as $particpant)
	{
		$vars = array(
			'From' => '+14505002017',
			'To' => $participant,
			'Url' => 'http://lancelotsystems.com/twilio-php-app/Conference.xml');

		$response = $client->request("/$API_VERSION/Accounts/$ACCOUNT_SID/Calls", "POST", $vars);
	}
?>
