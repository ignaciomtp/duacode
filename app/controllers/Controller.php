<?php

class Controller {

	protected function view($filename = '', $data = []) {
/*
		echo "<pre>";
		print_r($data);
		echo "</pre>";

		die();
*/

		$datos = $data;
		require_once 'app/views/'.$filename.'.php';
	}
}