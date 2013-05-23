<?php
/* Modalidade Test cases generated on: 2011-09-24 21:48:26 : 1316893706*/
App::import('Model', 'Modalidade');

class ModalidadeTestCase extends CakeTestCase {
	var $fixtures = array('app.modalidade', 'app.licitacao', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Modalidade =& ClassRegistry::init('Modalidade');
	}

	function endTest() {
		unset($this->Modalidade);
		ClassRegistry::flush();
	}

}
