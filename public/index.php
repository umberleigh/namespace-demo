<?php
//use umberleigh\MyApp\Example\TestClass;
/**
 * This is the entrypoint into the app, all paths will be redirected here unless
 * another file exists at the path.
 */

// Composer autoload
require_once "../vendor/autoload.php";

// Classes can be autoloaded from the src/ directory under the "MyApp\Example" namespace

$test = new \umberleigh\MyApp\Example\TestClass();
echo $test->helloWorld();
