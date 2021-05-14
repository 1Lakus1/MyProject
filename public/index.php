<?php
ini_set('display_errors', 1);
define("document_root", __DIR__."/..");
session_save_path(document_root."/App/Sessions");
session_start();
use Framework\Router\route;
require_once __DIR__ . "/../App/Service/autoloader.php";

route::start();
