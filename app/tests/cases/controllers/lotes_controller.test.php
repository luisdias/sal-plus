<?php
/* Lotes Test cases generated on: 2011-09-24 22:33:07 : 1316896387*/
App::import('Controller', 'Lotes');

class TestLotesController extends LotesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LotesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lote', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Lotes =& new TestLotesController();
		$this->Lotes->constructClasses();
	}

	function endTest() {
		unset($this->Lotes);
		ClassRegistry::flush();
	}

}
