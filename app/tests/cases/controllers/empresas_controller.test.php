<?php
/* Empresas Test cases generated on: 2011-09-24 22:32:29 : 1316896349*/
App::import('Controller', 'Empresas');

class TestEmpresasController extends EmpresasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmpresasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.empresa', 'app.resultado', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote');

	function startTest() {
		$this->Empresas =& new TestEmpresasController();
		$this->Empresas->constructClasses();
	}

	function endTest() {
		unset($this->Empresas);
		ClassRegistry::flush();
	}

	function testFind() {

	}

}
