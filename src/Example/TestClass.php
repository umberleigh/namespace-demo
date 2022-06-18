<?php
/**
 * An example of sub-namespacing.
 *
 * `umberleigh` - our root namespace, defined in `compsoser.json`
 *
 * `MyApp`     - a sub-namespace, also defined in `composer.json`
 *
 * `Example`    - a sub-namespace, defined here.
 *
 * Ensure that the class is inside `/src/Example` (case sensitive) for the
 * autoloader to work
 */
namespace umberleigh\MyApp\Example;

class TestClass
{
    /**
     * A test function in a class, with a namespace for autoloading
     *
     * @return string
     */
    public function helloWorld(): string
    {
        return 'Hello World! This text comes from an autoloaded and namespaced class! ☺️🎉';
    }
}
