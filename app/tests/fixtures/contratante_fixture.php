<?php
/* Contratante Fixture generated on: 2011-09-24 22:20:53 : 1316895653 */
class ContratanteFixture extends CakeTestFixture {
	var $name = 'Contratante';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 7, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'categoria' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name' => array('column' => 'name', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem',
			'categoria' => 'Lorem ip',
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 10
		),
	);
}
