<?php
/* Evento Test cases generated on: 2011-09-24 21:47:58 : 1316893678*/
App::import('Model', 'Evento');

class EventoTestCase extends CakeTestCase {
	var $fixtures = array('app.evento', 'app.licitacao', 'app.modalidade', 'app.tipolicitacao', 'app.usuario', 'app.contratante', 'app.lote', 'app.empresa', 'app.resultado', 'app.tipoevento');

	function startTest() {
		$this->Evento =& ClassRegistry::init('Evento');
	}

	function endTest() {
		unset($this->Evento);
		ClassRegistry::flush();
	}

}
