<?php
/* Licitacoes Test cases generated on: 2011-09-24 22:33:01 : 1316896381*/
App::import('Controller', 'Licitacoes');

class TestLicitacoesController extends LicitacoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LicitacoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Licitacoes =& new TestLicitacoesController();
		$this->Licitacoes->constructClasses();
	}

	function endTest() {
		unset($this->Licitacoes);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
