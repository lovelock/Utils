<?php

spl_autoload_register(function($className) {
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    // path\to\class;
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $dirName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName = $dirName . str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    require $fileName;
});
