<?php
App::uses('AppModel', 'Model');
/**
 * Categorium Model
 *
 */
class Categorium extends AppModel {

	//public $hasMany = array('Proyecto');

	public $hasMany = array(
        'Proyecto' => array(
            'className' => 'Proyecto',
            'foreignKey' => 'id_categoria'
        )
    );
/**
 * Validation rules
 *
 * @var array
 */

	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
