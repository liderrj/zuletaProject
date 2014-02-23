<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombreCompleto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipoUsuario' => array('type' => 'integer', 'null' => false, 'default' => null),
		'clave' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ulogin' => array('column' => 'login', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'login' => 'Lorem ipsum dolor sit amet',
			'nombreCompleto' => 'Lorem ipsum dolor sit amet',
			'tipoUsuario' => 1,
			'clave' => 'Lorem ipsum dolor sit amet'
		),
	);

}
