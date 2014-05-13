<?php
/**
* Fichier qui sert d'unique porte d'entrée du framework
*
* Fichier qui sert d'unique porte d'entrée du framework. On charge les quelques classes principales et on instancie notre bootstrap.
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

require 'config.php';
require 'util/Auth.php';

// Also spl_autoloader_register (Take a look at it if you like)
function __autoload($class) {
	require LIBS . $class. '.php';
}

$app = new Bootstrap();
