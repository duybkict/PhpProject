<?php

App::uses('AppModel', 'Model');

class Image extends AppModel {

	public $validate = array(
		'image' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Password is required'
			)
		),
	);

}