<?php

/**
 * Inclur file php if exists
 * @param $file
 * @return bool|mixed
 */
function includeIfExists($file)
{
    return file_exists($file) ? include $file : false;
}

// Try loading the file vendor/autoload.php
$loader = includeIfExists(__DIR__ . '/../vendor/autoload.php');
if ($loader !== false)
    return $loader;

// Try loading the file autoload.php
$loader = includeIfExists(__DIR__ . '/../../vendor/autoload.php');
if ($loader !== false)
    return $loader;

// Shor message
echo 'You must set up the project dependencies, run the following commands:' . PHP_EOL . 'php consolle.phar install' . PHP_EOL;
exit(1);