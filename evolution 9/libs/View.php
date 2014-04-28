<?php
/**
* Classe View
*
* Classe View
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class View {

	function __construct() {
		//echo 'This is the view';
	}

	public function render($name, $noInclude = false) {
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		} else {
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';
		}
	}

}