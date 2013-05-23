<?php
/* Usuarios Test cases generated on: 2011-09-24 22:33:44 : 1316896424*/
App::import('Controller', 'Usuarios');

class TestUsuariosController extends UsuariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsuariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.contratante', 'app.evento', 'app.tipoevento', 'app.lote', 'app.empresa', 'app.resultado');

	function startTest() {
		$this->Usuarios =& new TestUsuariosController();
		$this->Usuarios->constructClasses();
	}

	function endTest() {
		unset($this->Usuarios);
		ClassRegistry::flush();
	}

	function testFind() {

	}

	function testLogin() {

	}

	function testLogout() {

	}

}
