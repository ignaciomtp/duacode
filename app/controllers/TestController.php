<?php


class TestController {
	public function show() {
		echo "<pre>";
		print_r($_SERVER);
		echo "</pre>";
	}
}