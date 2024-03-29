<?php
/**
* Classe Bootstrap
*
* Classe Bootstrap
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Bootstrap {

	function __construct() {
		
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		//print_r($url);

		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			require 'controllers/error.php';
			$controller = new Error();
			return false;
		}
		
		$controller = new $url[0];

		if (isset($url[2])) {
			$controller->{$url[1]}($url[2]);
		} else {

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}

		}

	}

}