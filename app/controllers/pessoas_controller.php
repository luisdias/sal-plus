<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class PessoasController extends AppController {

	var $name = 'Pessoas';
        var $paginate = array('limit'=>10, 'order'=>array('Pessoa.nome'=>'asc'));
        public $presetVars = array(
                array('field' => 'nome', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Pessoa->parseCriteria($this->passedArgs);
                $this->set('pessoas', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {	
            $recursos = $this->Pessoa->Recurso->find('list');
            $this->set('recursos',$recursos);
            if ($this->action == 'view' ) {
                $pessoas = $this->Pessoa->find('list');                
                $this->set('pessoas',$pessoas);
                $contratos = $this->Pessoa->Recurso->Contrato->find('list');
                $this->set('contratos',$contratos);
            }            
	} 
}
