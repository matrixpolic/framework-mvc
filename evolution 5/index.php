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

// Use an autoloader!
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Library
require 'libs/Database.php';
require 'libs/Session.php';

require 'config/paths.php';
require 'config/database.php';

$app = new Bootstrap();
