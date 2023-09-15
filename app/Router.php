<?php

class Router {

	public static function handle($method = 'GET', $path = '/', $controller = '', $action = null) {



		$currentMethod	=	$_SERVER['REQUEST_METHOD'];
		$currentUri		=	$_SERVER['REQUEST_URI'];

		if($currentMethod != $method) {
			return false;
		}

		$root = '/duacode-prueba';

		$pattern = '#^'.$root.$path.'$#siD';


		if(preg_match($pattern, $currentUri)) {

			require_once __DIR__ . '/controllers/'. $controller.'.php';	
			$newController = new $controller();
			$newController->$action();
			exit();
		}

		return false;

	}


	public static function get($path = '/', $controller = '', $action = null) {
		return self::handle('GET', $path, $controller, $action);
	}

	public static function post($path = '/', $controller = '', $action = null) {
		return self::handle('POST', $path, $controller, $action);
	}

	public static function put($path = '/', $controller = '', $action = null) {
		return self::handle('PUT', $path, $controller, $action);
	}

	public static function delete($path = '/', $controller = '', $action = null) {
		return self::handle('DELETE', $path, $controller, $action);
	}

}