<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT.'/views');
define ('BASE_URL', "http://localhost/tutorials/cms");

//$db = new PDO('mysql:host=localhost;dbname=cms,' 'root', '');

$dbn = 'mysql:dbname=cms;host=localhost';
$user = 'root';
$password = '';

$db = new PDO($dbn, $user, $password);
