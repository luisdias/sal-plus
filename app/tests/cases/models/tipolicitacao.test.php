<?php
/* Tipolicitacao Test cases generated on: 2011-09-24 21:48:50 : 1316893730*/
App::import('Model', 'Tipolicitacao');

class TipolicitacaoTestCase extends CakeTestCase {
	var $fixtures = array('app.tipolicitacao', 'app.licitacao', 'app.modalidade', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Tipolicitacao =& ClassRegistry::init('Tipolicitacao');
	}

	function endTest() {
		unset($this->Tipolicitacao);
		ClassRegistry::flush();
	}

}
