<?php

//This is our controller

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the auoload file
require_once('vendor/autoload.php');
//Instantiate the base class
$f3 = Base::instance();
//Base f3 = new Base();

//Define a default route
$f3->route('GET /', function() {
   echo '<h1>Hello, World!</h1>';
});

//Run fat free
$f3->run();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<body>

</body>
</html>

