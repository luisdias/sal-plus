<?php
/* Empresa Test cases generated on: 2011-09-24 21:47:49 : 1316893669*/
App::import('Model', 'Empresa');

class EmpresaTestCase extends CakeTestCase {
	var $fixtures = array('app.empresa', 'app.resultado', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote');

	function startTest() {
		$this->Empresa =& ClassRegistry::init('Empresa');
	}

	function endTest() {
		unset($this->Empresa);
		ClassRegistry::flush();
	}

}
