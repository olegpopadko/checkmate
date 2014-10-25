<?php

/**
 * Helper file includes core helpers functions.
 */
require __DIR__.'/helpers.php';

/**
 * Paths
 */
$paths = require __DIR__ . '/../bootstrap/paths.php';

/**
 * Core class loader
 */
require __DIR__ . '/ClassLoader.php';

/**
 * App start file
 */
require __DIR__.'/../bootstrap/start.php';

/**
 * Core App class
 */
require __DIR__.'/App.php';

$app = new App();
