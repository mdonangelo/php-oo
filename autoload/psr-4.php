<?php

function load(string $completeName): void
{
    $rootName = "App\\";
    $dirBase = __DIR__ . "/../src/";

    $lenghtRootName = strlen($rootName);
    $nameSpaceRoot = substr($completeName, 0, $lenghtRootName);

    if($rootName !== $nameSpaceRoot) {
        return ;
    }

    $relativePath = substr($completeName, $lenghtRootName);
    $pathFile = $dirBase . str_replace("\\", "/", $relativePath) . ".php";

    if(file_exists($pathFile)) {
        require $pathFile;
    }
}

spl_autoload_register("load");