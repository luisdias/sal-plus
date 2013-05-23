<?php
/* Resultados Test cases generated on: 2011-09-24 22:33:18 : 1316896398*/
App::import('Controller', 'Resultados');

class TestResultadosController extends ResultadosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ResultadosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.resultado', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa');

	function startTest() {
		$this->Resultados =& new TestResultadosController();
		$this->Resultados->constructClasses();
	}

	function endTest() {
		unset($this->Resultados);
		ClassRegistry::flush();
	}

}
