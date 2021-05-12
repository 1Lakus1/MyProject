<?php

namespace Framework\Autoloader;
require document_root . '/Framework/Autoloader/autoload.php';
spl_autoload_register(function ($classname) {
    $autoload = new autoload;
    try {
        $autoload->load($classname);
    } catch (FileNotExists $e) {
        $e->getMessage();
    }
});
