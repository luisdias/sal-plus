<?php
/* Lote Test cases generated on: 2011-09-24 21:48:18 : 1316893698*/
App::import('Model', 'Lote');

class LoteTestCase extends CakeTestCase {
	var $fixtures = array('app.lote', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Lote =& ClassRegistry::init('Lote');
	}

	function endTest() {
		unset($this->Lote);
		ClassRegistry::flush();
	}

}
