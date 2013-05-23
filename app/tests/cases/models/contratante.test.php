<?php
/* Contratante Test cases generated on: 2011-09-24 21:47:32 : 1316893652*/
App::import('Model', 'Contratante');

class ContratanteTestCase extends CakeTestCase {
	var $fixtures = array('app.contratante', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Contratante =& ClassRegistry::init('Contratante');
	}

	function endTest() {
		unset($this->Contratante);
		ClassRegistry::flush();
	}

}
