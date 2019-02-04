<?php

// Include Stackmash to your project
include_once('Stackmash.php');

// Call the action function, it will give you a response
$response = action(['PUBLIC_KEY', 'PRIVATE_KEY'], 'category-id', 'You have a new notification', 'body text here');

// Optional - you can print the response if you get any errors
print_r($response);