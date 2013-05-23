<?php
/* Tipoevento Test cases generated on: 2011-09-24 21:48:42 : 1316893722*/
App::import('Model', 'Tipoevento');

class TipoeventoTestCase extends CakeTestCase {
	var $fixtures = array('app.tipoevento', 'app.evento', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Tipoevento =& ClassRegistry::init('Tipoevento');
	}

	function endTest() {
		unset($this->Tipoevento);
		ClassRegistry::flush();
	}

}
