<?php

    	define( "DB_DSN", "mysql:host=localhost;dbname=duacode;charset=utf8" );
        define( "DB_USERNAME", "root" );
	define( "DB_PASSWORD", '' );
        

	$request = $_SERVER['REQUEST_URI'] ?? '/';

	$uri = explode('/', $request);	

	define( "ROOT", $uri[1] );