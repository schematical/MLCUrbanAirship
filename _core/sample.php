<?php

require_once 'urbanairship.php';

// Your testing data
$APP_MASTER_SECRET = '';
$APP_KEY = '';
$TEST_DEVICE_TOKEN = '';

// Create Airship object
$airship = new Airship($APP_KEY, $APP_MASTER_SECRET);

// Test feedback

//$time = new DateTime('now', new DateTimeZone('UTC'));
//$time->modify('-1 day');
//echo $time->format('c') . '\n';
//print_r($airship->feedback($time));

// Test register

//$airship->register($TEST_DEVICE_TOKEN, 'testTag');

// Test get device token info
//print_r($airship->get_device_token_info($TEST_DEVICE_TOKEN));

// Test get device tokens

//$tokens = $airship->get_device_tokens();
//echo 'Device tokens count is:' . count($tokens);
//foreach ($tokens as $item) {
    //var_dump($item);
//}

// Test deregister

//$airship->deregister($TEST_DEVICE_TOKEN);


// Test push

//$message = array('aps'=>array('alert'=>'hello'));
//$airship->push($message, null, array('testTag'));

// Test broadcast

//$broadcast_message = array('aps'=>array('alert'=>'hello to all'));
//$airship->broadcast($broadcast_message, array($TEST_DEVICE_TOKEN));

?>
