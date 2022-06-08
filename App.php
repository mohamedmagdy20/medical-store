<?php

use Admin\Medicalstore\Request;
use Admin\Medicalstore\Session;

define("PATH",__DIR__."/");
define("URL","http://localhost/Medicalstore/");

//define("APATH",__DIR__. "/Admin/");
define("AURL","http://localhost/Medicalstore/Admin/");

define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","medicalstore");
require (PATH ."vendor/autoload.php");
$request = new Request;
$session = new Session;
