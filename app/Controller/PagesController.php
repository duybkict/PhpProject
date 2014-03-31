<?php

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

class PagesController extends AppController {

	public $uses = array();

	public function index()
	{
		$title_for_layout = 'Home';

		$this->layout = 'default';
		
		$this->set(compact('title_for_layout'));
	}

	public function admin_index()
	{
		$this->layout = 'admin_default';
	}

}
