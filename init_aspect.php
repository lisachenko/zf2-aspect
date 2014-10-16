<?php

use Aspect\DemoAspectKernel;

// Prevent an error about nesting level
ini_set('xdebug.max_nesting_level', 500);

include __DIR__ . '/init_autoloader.php';

// Initialize demo aspect container
DemoAspectKernel::getInstance()->init(array(
    'debug'         => true,
    'appDir'        => __DIR__,
    'cacheDir'      => __DIR__ . '/data/cache/aspect',
    // Include paths for aspect weaving
    'excludePaths'  => array(
        __DIR__ . '/data/cache/aspect',
    )
));