<?php

class DataService {

	public $ds;

	public function __construct(dataServiceInterface $dataService) {
		$this->ds = $dataService;
	}
}