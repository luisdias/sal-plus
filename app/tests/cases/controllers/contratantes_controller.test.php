<?php
/* Contratantes Test cases generated on: 2011-09-24 22:02:24 : 1316894544*/
App::import('Controller', 'Contratantes');

class TestContratantesController extends ContratantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContratantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contratante', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Contratantes =& new TestContratantesController();
		$this->Contratantes->constructClasses();
	}

	function endTest() {
		unset($this->Contratantes);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
