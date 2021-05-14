<?php
require document_root.'/Framework/Autoloader/autoload.php';
use Framework\Autoloader\autoload;

spl_autoload_register(function ($classname) {
    $autoload = new autoload;
    try {
        $autoload->load($classname);
    } catch (ClassFileNotExists $e) {
        $e->getMessage();
    }
});
