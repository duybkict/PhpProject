<?php

App::uses('AppController', 'Controller');

class ContentsController extends AppController {

	public $uses = array();
	public $components = array('Session', 'Auth');

	public function beforeFilter()
	{
		parent::beforeFilter();
	}

	public function admin_index()
	{
		$this->layout = 'admin_default';
	}

}
