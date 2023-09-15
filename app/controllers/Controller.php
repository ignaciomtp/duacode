<?php

class Controller {

	protected function view($filename = '', $data = []) {
		require_once 'app/views/'.$filename.'.php';
	}
}