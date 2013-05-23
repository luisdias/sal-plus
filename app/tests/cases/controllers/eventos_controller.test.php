<?php
/* Eventos Test cases generated on: 2011-09-24 22:32:41 : 1316896361*/
App::import('Controller', 'Eventos');

class TestEventosController extends EventosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EventosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.evento', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.lote', 'app.empresa', 'app.resultado', 'app.tipoevento');

	function startTest() {
		$this->Eventos =& new TestEventosController();
		$this->Eventos->constructClasses();
	}

	function endTest() {
		unset($this->Eventos);
		ClassRegistry::flush();
	}

	function testMapa() {

	}

}
