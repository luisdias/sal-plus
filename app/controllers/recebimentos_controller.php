<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */
class RecebimentosController extends AppController {

	var $name = 'Recebimentos';
        var $fk = 'Contrato.id';
        var $paginate = array('limit'=>10, 'order'=>array('Recebimento.numero_documento'=>'asc'));
        public $presetVars = array(
            array('field' => 'contrato_id', 'type' => 'value')
        );
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Recebimento->parseCriteria($this->passedArgs);
            $this->set('recebimentos', $this->paginate());
            $this->setRelated();
            $this->render('index');
        }        
        
        function index() {
            $this->setRelated();
            parent::index();            
        }
        
	function setRelated() {	
            $contratos = $this->Recebimento->Contrato->find('list');
            $this->set('contratos',$contratos);
	}        
}
