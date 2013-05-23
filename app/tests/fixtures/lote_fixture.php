<?php
/* Lote Fixture generated on: 2011-09-24 22:20:54 : 1316895654 */
class LoteFixture extends CakeTestFixture {
	var $name = 'Lote';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'num_lote' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vlr_lote' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '12,2'),
		'prazo_lote' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'licitacao_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'licitacao_id' => array('column' => 'licitacao_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'num_lote' => 'Lor',
			'vlr_lote' => 1,
			'prazo_lote' => 1,
			'licitacao_id' => 1,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'num_lote' => 'Lor',
			'vlr_lote' => 2,
			'prazo_lote' => 2,
			'licitacao_id' => 2,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'num_lote' => 'Lor',
			'vlr_lote' => 3,
			'prazo_lote' => 3,
			'licitacao_id' => 3,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'num_lote' => 'Lor',
			'vlr_lote' => 4,
			'prazo_lote' => 4,
			'licitacao_id' => 4,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'num_lote' => 'Lor',
			'vlr_lote' => 5,
			'prazo_lote' => 5,
			'licitacao_id' => 5,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'num_lote' => 'Lor',
			'vlr_lote' => 6,
			'prazo_lote' => 6,
			'licitacao_id' => 6,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'num_lote' => 'Lor',
			'vlr_lote' => 7,
			'prazo_lote' => 7,
			'licitacao_id' => 7,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'num_lote' => 'Lor',
			'vlr_lote' => 8,
			'prazo_lote' => 8,
			'licitacao_id' => 8,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'num_lote' => 'Lor',
			'vlr_lote' => 9,
			'prazo_lote' => 9,
			'licitacao_id' => 9,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'num_lote' => 'Lor',
			'vlr_lote' => 10,
			'prazo_lote' => 10,
			'licitacao_id' => 10,
			'created' => '2011-09-24 22:20:54',
			'modified' => '2011-09-24 22:20:54',
			'modified_by' => 10
		),
	);
}
