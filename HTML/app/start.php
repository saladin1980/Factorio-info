<?php

ini_set('display_errors', 'on');

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://factorio.info' );

$db = new PDO('mysql:host=localhost;dbname=cms', 'USERNAME', 'PASSWORD');




?>