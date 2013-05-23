<?php
/* Evento Fixture generated on: 2011-09-24 22:20:53 : 1316895653 */
class EventoFixture extends CakeTestFixture {
	var $name = 'Evento';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'dt_eve' => array('type' => 'date', 'null' => true, 'default' => '0000-00-00'),
		'texto_eve' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipoevento_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'licitacao_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'licitacao_id' => array('column' => 'licitacao_id', 'unique' => 0), 'tipoevento_id' => array('column' => 'tipoevento_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 1,
			'licitacao_id' => 1,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 1
		),
		array(
			'id' => 2,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 2,
			'licitacao_id' => 2,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 2
		),
		array(
			'id' => 3,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 3,
			'licitacao_id' => 3,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 3
		),
		array(
			'id' => 4,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 4,
			'licitacao_id' => 4,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 4
		),
		array(
			'id' => 5,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 5,
			'licitacao_id' => 5,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 5
		),
		array(
			'id' => 6,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 6,
			'licitacao_id' => 6,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 6
		),
		array(
			'id' => 7,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 7,
			'licitacao_id' => 7,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 7
		),
		array(
			'id' => 8,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 8,
			'licitacao_id' => 8,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 8
		),
		array(
			'id' => 9,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 9,
			'licitacao_id' => 9,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 9
		),
		array(
			'id' => 10,
			'dt_eve' => '2011-09-24',
			'texto_eve' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tipoevento_id' => 10,
			'licitacao_id' => 10,
			'created' => '2011-09-24 22:20:53',
			'modified' => '2011-09-24 22:20:53',
			'modified_by' => 10
		),
	);
}
