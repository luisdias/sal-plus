<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class ReajustesController extends AppController {

	var $name = 'Reajustes';
        var $paginate = array('limit'=>10, 'order'=>array('Reajuste.title'=>'asc'));
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Reajuste->parseCriteria($this->passedArgs);
                $this->set('reajustes', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {
            if ($this->action == 'view' ) {
                $contratos = $this->Reajuste->Contrato->find('list');                
                $this->set('contratos',$contratos);
                $situacoes = $this->Reajuste->Contrato->Situacao->find('list');
                $licitacoes = $this->Reajuste->Contrato->Licitacao->find('list');
                $this->set('situacoes',$situacoes);
                $this->set('licitacoes',$licitacoes);                
            }            
	}
}
