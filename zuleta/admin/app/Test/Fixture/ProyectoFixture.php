<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'proyecto';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'titulo' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tematica' => array('type' => 'integer', 'null' => false, 'default' => null),
		'id_categoria' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tipo' => array('type' => 'integer', 'null' => false, 'default' => null),
		'autor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tutor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'jurado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ubicacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'resumen' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cota' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ruta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaPresentacion' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titulo' => 1,
			'tematica' => 1,
			'id_categoria' => 1,
			'tipo' => 1,
			'autor' => 'Lorem ipsum dolor sit amet',
			'tutor' => 'Lorem ipsum dolor sit amet',
			'jurado' => 'Lorem ipsum dolor sit amet',
			'ubicacion' => 'Lorem ipsum dolor sit amet',
			'resumen' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'cota' => 'Lorem ipsum dolor sit amet',
			'ruta' => 'Lorem ipsum dolor sit amet',
			'fechaPresentacion' => '2014-02-23'
		),
	);

}
