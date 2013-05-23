<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class RecursosController extends AppController {

	var $name = 'Recursos';
        var $fk = 'Contrato.id';
        var $paginate = array('limit'=>10, 'order'=>array('Contrato.numero'=>'desc'));

        public $presetVars = array(
                array('field' => 'contrato_id', 'type' => 'value'),
        );
        
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Recurso->parseCriteria($this->passedArgs);
            $this->set('recursos', $this->paginate());
            $this->setRelated();            
            $this->render('index');
        }         
        
        function index() {
            $this->setRelated();
            parent::index();            
        }        
        
	function setRelated() {	
            $contratos = $this->Recurso->Contrato->find('list');
            $pessoas = $this->Recurso->Pessoa->find('list');
            $this->set('contratos',$contratos);
            $this->set('pessoas',$pessoas);                
	}
}
