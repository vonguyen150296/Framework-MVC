<?php
//path to system
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');

//get the constant configuration
require (PATH_SYSTEM . '/config/config.php');

//Open the fle Common.php, loader function load() in this file
include_once PATH_SYSTEM . '/core/Common.php';

// run main programmation
Load();

?>