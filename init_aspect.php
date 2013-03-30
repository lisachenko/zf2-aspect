<?php

use Aspect\DemoAspectKernel;

// Prevent an error about nesting level
ini_set('xdebug.max_nesting_level', 500);

include './vendor/lisachenko/go-aop-php/src/Go/Core/AspectKernel.php';
include './aspect/Aspect/DemoAspectKernel.php';

// Initialize demo aspect container
DemoAspectKernel::getInstance()->init(array(
    'debug'         => false,
    'appLoader'     => __DIR__ . '/init_autoloader.php',
    'cacheDir'      => __DIR__ . '/data/cache/aspect',
    // Include paths for aspect weaving
    'includePaths'  => array(),
    // Configuration for autoload namespaces
    'autoloadPaths' => array(
        'Aspect'           => __DIR__ . '/aspect/',
        'Go'               => __DIR__ . '/vendor/lisachenko/go-aop-php/src',
        'TokenReflection'  => __DIR__ . '/vendor/andrewsville/php-token-reflection/',
        'Doctrine\\Common' => __DIR__ . '/vendor/doctrine/common/lib/',
        'Dissect'          => __DIR__ . '/vendor/jakubledl/dissect/src/',
    ),
));