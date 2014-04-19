<?php

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

class PagesController extends AppController {

	public $uses = array('Image', 'Content');

	public function index()
	{
		$title_for_layout = 'Home';

		$this->layout = 'default';
		
		$images = $this->Image->find('all');
		$content = $this->Content->find('first');
		
		$this->set(compact('title_for_layout', 'images', 'content'));
	}

	public function admin_index()
	{
		$this->layout = 'admin_default';
	}

}
