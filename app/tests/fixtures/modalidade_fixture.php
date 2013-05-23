<?php
/* Modalidade Fixture generated on: 2011-09-24 22:20:54 : 1316895654 */
class ModalidadeFixture extends CakeTestFixture {
	var $name = 'Modalidade';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'title' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 10
		),
	);
}
