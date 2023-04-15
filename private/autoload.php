<?php
require_once 'path.php';
require_once LIBRARY_PATH . '/ContentManager.php';
require_once DATABASE_PATH . '/Database.php';

spl_autoload_register(function ($class_name) {
    $file = PRIVATE_PATH . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
