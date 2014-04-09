<?php
/**
* Classe Error qui étend la classe Controller
*
* Classe Error qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Error extends Controller {
	
	function __construct() {
		parent::__construct();
		echo 'This is an error!';

		$this->view->msg = 'This page doesnt exist';
		$this->view->render('error/index');
	}

}