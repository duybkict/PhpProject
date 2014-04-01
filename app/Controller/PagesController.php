<?php

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

class PagesController extends AppController {

	public $uses = array('Image');

	public function index()
	{
		$title_for_layout = 'Home';

		$this->layout = 'default';
		
		$images = $this->Image->find('all');
		
		$this->set(compact('title_for_layout', 'images'));
	}

	public function admin_index()
	{
		$this->layout = 'admin_default';
	}

}
