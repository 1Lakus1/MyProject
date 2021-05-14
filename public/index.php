<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define("document_root", __DIR__."/..");
session_save_path(document_root."/App/Sessions");
session_start();
use Framework\Router\route;
/*require_once __DIR__ . "/../App/Service/autoloader.php";*/
require_once "../vendor/autoload.php";
var_dump($_GET);
route::start();

