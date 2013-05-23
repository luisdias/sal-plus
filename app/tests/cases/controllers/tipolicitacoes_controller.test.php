<?php
/* Tipolicitacoes Test cases generated on: 2011-09-24 22:33:34 : 1316896414*/
App::import('Controller', 'Tipolicitacoes');

class TestTipolicitacoesController extends TipolicitacoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipolicitacoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipolicitacao', 'app.licitacao', 'app.modalidade', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Tipolicitacoes =& new TestTipolicitacoesController();
		$this->Tipolicitacoes->constructClasses();
	}

	function endTest() {
		unset($this->Tipolicitacoes);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
