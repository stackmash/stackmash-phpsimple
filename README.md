# A single file PHP library for Stackmash
Stackmash - User monitoring notifications and logs. Stackmash gives you real-time notifications for any activity on your website or app, such as user sign-ups, payments, orders, errors, contact requests and more.

### Requirements
* The cURL extension enabled within PHP
* The JSON extension enabled within PHP

### Download the Stackmash PHP file

Download the Stackmash PHP file here: https://github.com/stackmash/stackmash-phpsimple, then move the file to your project where it can be accessed where needed.

### Start using Stackmash

Sending Stackmash notifications is now super simple.

```php
<?php

// Include Stackmash to your project
include_once('Stackmash.php');

// Call the action function, it will give you a response
$response = action(['PUBLIC_KEY', 'PRIVATE_KEY'], 'category-id', 'You have a new notification', 'body text here');

// Optional - you can print the response if you get any errors
print_r($response);
```

### Documentation

<a href="https://stackmash.com/docs/examples#php" target="_blank">PHP documentation</a>
For support, email <a href="mailto:support@stackmash.com">support@stackmash.com</a> or visit <a href="https://stackmash.com/support">https://stackmash.com/support</a>.
