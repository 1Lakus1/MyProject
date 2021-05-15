<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define("DOCUMENT_ROOT", __DIR__ . "/..");
session_save_path(DOCUMENT_ROOT . "/App/Sessions");

use Framework\Router\Route;

require_once "../vendor/autoload.php";

Route::start();
