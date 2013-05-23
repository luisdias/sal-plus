<?php
/* Modalidades Test cases generated on: 2011-09-24 22:33:13 : 1316896393*/
App::import('Controller', 'Modalidades');

class TestModalidadesController extends ModalidadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ModalidadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.modalidade', 'app.licitacao', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Modalidades =& new TestModalidadesController();
		$this->Modalidades->constructClasses();
	}

	function endTest() {
		unset($this->Modalidades);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
