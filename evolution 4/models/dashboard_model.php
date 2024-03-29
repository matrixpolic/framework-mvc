<?php
/**
* Classe Dashboard_Model
*
* Classe Dashboard_Model
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class Dashboard_Model extends Model {

	function __construct() {
		parent::__construct();
	}

	function xhrInsert() {
		$text = $_POST['text'];

		$sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
		$sth->execute(array(':text' => $text));

		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}

	function xhrGetListings() {
		$sth = $this->db->prepare('SELECT * FROM data');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}

	function xhrDeleteListing() {
		$id = $_POST['id'];
		$sth = $this->db->prepare('DELETE FROM data WHERE id = "'.$id.'"');
		$sth->execute();
	}
	
}