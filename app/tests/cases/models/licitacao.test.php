<?php
/* Licitacao Test cases generated on: 2011-09-24 21:48:07 : 1316893687*/
App::import('Model', 'Licitacao');

class LicitacaoTestCase extends CakeTestCase {
	var $fixtures = array('app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Licitacao =& ClassRegistry::init('Licitacao');
	}

	function endTest() {
		unset($this->Licitacao);
		ClassRegistry::flush();
	}

}
