<?php
/* Tipoeventos Test cases generated on: 2011-09-24 22:33:25 : 1316896405*/
App::import('Controller', 'Tipoeventos');

class TestTipoeventosController extends TipoeventosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipoeventosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipoevento', 'app.evento', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Tipoeventos =& new TestTipoeventosController();
		$this->Tipoeventos->constructClasses();
	}

	function endTest() {
		unset($this->Tipoeventos);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
