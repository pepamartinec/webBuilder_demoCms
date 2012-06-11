<?php

// DATABASE CONNECTION
define( 'HOST', 'localhost' );
define( 'USER', 'root' );
define( 'PASSWORD', '' );
define( 'DATABASE', 'webBuilder' );

// PATHS SETTINGS
define( 'BASE_HREF', 'http://dev-local/demoCms/' );




// server paths
define( 'PATH_TO_ROOT', __DIR__.'/' );

// activate composer autoloading
require __DIR__.'/vendor/autoload.php';

// handle errors as exceptions
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}
set_error_handler("exception_error_handler");


function redirect( $location )
{
	header( 'Location: '.$location );
	exit;
}
