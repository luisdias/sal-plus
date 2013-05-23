<?php
/* Tipoevento Fixture generated on: 2011-09-24 22:20:55 : 1316895655 */
class TipoeventoFixture extends CakeTestFixture {
	var $name = 'Tipoevento';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:55',
			'modified' => '2011-09-24 22:20:55',
			'modified_by' => 10
		),
	);
}
