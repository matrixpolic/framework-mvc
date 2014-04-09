<?php
/**
* Classe Login qui étend la classe Controller
*
* Classe Login qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Login extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->render('login/index');
	}

}