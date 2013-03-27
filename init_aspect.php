<?php

use Aspect\DemoAspectKernel;

// Prevent an error about nesting level
ini_set('xdebug.max_nesting_level', 500);

include './vendor/lisachenko/go-aop-php/src/Go/Core/AspectKernel.php';
include './aspect/Aspect/DemoAspectKernel.php';

// Initialize demo aspect container
DemoAspectKernel::getInstance()->init(array(
    // Configuration for autoload namespaces
    'autoload' => array(
        'Aspect'           => realpath(__DIR__ . '/aspect/'),
        'Go'               => realpath(__DIR__ . '/vendor/lisachenko/go-aop-php/src'),
        'TokenReflection'  => realpath(__DIR__ . '/vendor/andrewsville/php-token-reflection/'),
        'Doctrine\\Common' => realpath(__DIR__ . '/vendor/doctrine/common/lib/'),
        'Dissect'          => realpath(__DIR__ . '/vendor/jakubledl/dissect/src/'),
    ),
    // Default application directory
    'appDir' => __DIR__ ,
    // Cache directory for Go! generated classes
    'cacheDir' => __DIR__ . '/data/cache/aspect',
    // Include paths for aspect weaving
    'includePaths' => array(),
    'debug' => true
));