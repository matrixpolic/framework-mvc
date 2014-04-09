<?php
/**
* Classe Help qui étend la classe Controller
*
* Classe Help qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Help extends Controller {

	function __construct() {
		parent::__construct();
		
	}

	function index() {
		$this->view->render('help/index');
	}

	public function other($arg = false) {
		require 'models/help_model.php';
		$model = new Help_Model();
		$this->view->blah = $model->blah();
	}

}