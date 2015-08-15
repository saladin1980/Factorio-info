<?php

/* 
define('DB_HOST', factorioinfo.db.5089743.hostedresource.com);
define('DB_DBNAME',factorioinfo);
define('DB_USER', factorioinfo);
define('DB_PASS', Factorio1nfo!);

define('DSN','mysql:host=' . DB_HOST . ';dbname='.DB_HOST );
 */
ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://factorio.info/test');

$db = new PDO('mysql:host=factorioinfo.db.5089743.hostedresource.com;dbname=factorioinfo', 'factorioinfo', 'Factorio1nfo!');

require 'functions.php';