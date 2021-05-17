<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const DOCUMENT_ROOT = __DIR__ . "/..";

use Framework\Router\Route;

require_once "../vendor/autoload.php";

Route::start();
