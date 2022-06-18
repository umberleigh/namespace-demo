<?php
/**
 * This is the entrypoint into the app
 */

/**
 * Composer autoload
 */
require_once "../vendor/autoload.php";

/**
 * Classes can be autoloaded from the src/ directory under the "MyApp\Example" namespace.
 * our class is aliased to just "TestClass" here:
 */
use umberleigh\MyApp\Example\TestClass;

$test = new TestClass();

/**
 * Alternatively we could alias the class name to something else:
 */
//use umberleigh\MyApp\Example\TestClass as AnotherClassName;
//$test = new AnotherClassName();


/**
 * If you don't have a "use" keyword, you can instantiate a class using the full
 * namespace like so:
 */
//$test = new \umberleigh\MyApp\Example\TestClass();

/**
 * Finally, we execute a function from our class:
 */
echo $test->helloWorld();
