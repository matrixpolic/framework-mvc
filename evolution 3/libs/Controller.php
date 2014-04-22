<?php
/**
* Classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Controller {

	function __construct() {
		//echo 'Main Controller<br/>';
		$this->view = new View();
	}

	public function loadModel($name) {

		$path = 'models/'.$name.'_model.php';

		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}

	}
	
}