<?php
/* Usuario Test cases generated on: 2011-09-24 21:52:44 : 1316893964*/
App::import('Model', 'Usuario');

class UsuarioTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Usuario =& ClassRegistry::init('Usuario');
	}

	function endTest() {
		unset($this->Usuario);
		ClassRegistry::flush();
	}

	function testCheckPassword() {

	}

}
