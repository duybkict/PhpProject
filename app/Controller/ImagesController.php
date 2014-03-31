<?php

App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class ImagesController extends AppController {

	public $uses = array();
	public $components = array('Session', 'Auth', 'Thumb');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Thumb->set_paths(WWW_ROOT . 'img' . DS . 'gallery' . DS, WWW_ROOT . 'img' . DS . 'thumb' . DS);
		$this->Thumb->set_zoom_crop('C');
		$this->Thumb->width = 140;
		$this->Thumb->height = 140;
	}

	public function admin_index()
	{
		$this->layout = 'admin_default';
		
		$images = $this->Image->find('all');

		$this->set(compact('images'));
	}

}
