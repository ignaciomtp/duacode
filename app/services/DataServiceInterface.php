<?php

interface DataServiceInterface {

	public function getAll();

	public function getOne($id);

	public function create($d1, $d2, $d3, $d4);

	public function update($id, $d1, $d2, $d3, $d4);

	public function delete($id);


}