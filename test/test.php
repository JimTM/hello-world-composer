<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use World\HelloWorld;

echo HelloWorld::say_hello();