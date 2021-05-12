<?php
ini_set('display_errors', 1);
define("document_root", __DIR__."/..");
use Framework\Core\route;
use Framework\Core\render;
require_once __DIR__."/../Framework/Autoloader/autoloader.php";

route::start();
render::message();