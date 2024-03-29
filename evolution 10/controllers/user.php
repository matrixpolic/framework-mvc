<?php
/**
* Classe User qui étend la classe Controller
*
* LICENSE: Informations sur la licence
*
* @copyright  Copyright (c) 2014 Quattro
* @license    BSD License
* @version    1.0
* @link       
* @since      1.0
*/

class User extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}

	public function index() {
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');
	}

	public function create() {
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];

		// @TODO: Do your error checking!

		$this->model->create($data);
		header('location: '. URL . 'user');
	}

	public function edit($id) {
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/edit');
	}

	public function editSave($id) {
		$data = array();
		$data['userid'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];

		// @TODO: Do your error checking!

		$this->model->editSave($data);
		header('location: '. URL . 'user');
	}

	public function delete($id) {
		$this->model->delete($id);
		header('location: '. URL . 'user');
	}

}