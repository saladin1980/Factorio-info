<?php

define('DB_HOST', 'localhost');
define('DB_DBNAME', 'cms');
define('DB_USER', 'root');
define('DB_PASS', 'root');

define('DSN','mysql:host=' . DB_HOST . ';dbname='.DB_HOST )

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://factorio.info');

$db = new PDO(DSN, DB_USER, DB_PASS);

require 'functions.php';