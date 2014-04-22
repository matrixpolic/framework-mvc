<?php
/**
* Classe Dashboard qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Dashboard extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	}

	function index() {
		$this->view->render('dashboard/index');
	}

	function logout() {
		Session::destroy();
		header('location: ../login');
		exit;
	}

}