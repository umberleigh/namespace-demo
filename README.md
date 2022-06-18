# umberleigh/namespace-demo

A simple starting project demonstrating PHP namespaces and autoloading

## Includes the following to get you started
- DDEV configuration for a containerised developer friendly install of PHP 8.1
- composer.json
- .editorconfig
- .gitignore
- public and src directories with example usage of a namespaced autoloading class

## Installation
- git clone
- `cd` to the project directory in your terminal
- run `ddev start` to spin up docker containers with PHP, database etc
- run `ddev composer install` to install dependencies

## Autoloading
This should be good to go, but you can add to / change your base namespace and
where the autoloader will look for Class files in the `autoload` section of
`composer.json` and then run `ddev composer dumpautoload`
if you need to.

Have Fun 🤓
