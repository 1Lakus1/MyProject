<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const DOCUMENT_ROOT = __DIR__ . "/..";

use Framework\Router\Route;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once "../vendor/autoload.php";
$log = new Logger('name');
$log->pushHandler(new StreamHandler(DOCUMENT_ROOT . '/App/Logs/logs.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
/*Route::start();*/
