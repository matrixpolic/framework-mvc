<?php
/**
* Classe Index qui étend la classe Controller
*
* Classe Index qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		echo 'INSIDE INDEX INDEX';
		$this->view->render('index/index');
	}

	function details() {
		$this->view->render('index/index');	
	}

}