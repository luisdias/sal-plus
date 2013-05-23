<?php
/* Resultado Test cases generated on: 2011-09-24 21:48:36 : 1316893716*/
App::import('Model', 'Resultado');

class ResultadoTestCase extends CakeTestCase {
	var $fixtures = array('app.resultado', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa');

	function startTest() {
		$this->Resultado =& ClassRegistry::init('Resultado');
	}

	function endTest() {
		unset($this->Resultado);
		ClassRegistry::flush();
	}

}
