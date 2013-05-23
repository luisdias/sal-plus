<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class GarantiasController extends AppController {

	var $name = 'Garantias';
        var $paginate = array('limit'=>10, 'order'=>array('title'=>'asc'));
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Garantia->parseCriteria($this->passedArgs);
                $this->set('garantias', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {	
            if ($this->action == 'view' ) {
                $situacoes = $this->Garantia->Contrato->Situacao->find('list');
                $licitacoes = $this->Garantia->Contrato->Licitacao->find('list');
                $this->set('situacoes',$situacoes);
                $this->set('licitacoes',$licitacoes);                
            } 
	}
}
