<?php
/*
    	define( "DB_DSN", "mysql:host=localhost;dbname=duacode;charset=utf8" );
        define( "DB_USERNAME", "root" );
	define( "DB_PASSWORD", '' );
*/

    	define( "DB_DSN", "mysql:host=http://mysql.dcode.nowineedthat.store;dbname=duacode;charset=utf8" );
        define( "DB_USERNAME", "root9" );
	define( "DB_PASSWORD", 'laLala777' );     

	$request = $_SERVER['REQUEST_URI'] ?? '/';

	$uri = explode('/', $request);	

	define( "ROOT", $uri[1] );