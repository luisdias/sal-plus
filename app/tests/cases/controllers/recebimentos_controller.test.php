<?php
/* Recebimentos Test cases generated on: 2013-04-09 19:55:30 : 1365530130*/
App::import('Controller', 'Recebimentos');

class TestRecebimentosController extends RecebimentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecebimentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.recebimento', 'app.contrato', 'app.situacao', 'app.reajuste', 'app.garantia', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado', 'app.aditivo', 'app.tipoaditivo', 'app.ocorrencia', 'app.tipoocorrencia', 'app.recurso', 'app.pessoa');

	function startTest() {
		$this->Recebimentos =& new TestRecebimentosController();
		$this->Recebimentos->constructClasses();
	}

	function endTest() {
		unset($this->Recebimentos);
		ClassRegistry::flush();
	}

}
