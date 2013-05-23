<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class SituacoesController extends AppController {

	var $name = 'Situacoes';
        var $ptSingularName = 'Situação';
        var $paginate = array('limit'=>10, 'order'=>array('Situacao.title'=>'asc'));
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Situacao->parseCriteria($this->passedArgs);
                $this->set('situacoes', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {	
            if ($this->action == 'view' ) {
                $situacoes = $this->Situacao->Contrato->Situacao->find('list');
                $licitacoes = $this->Situacao->Contrato->Licitacao->find('list');
                $this->set('situacoes',$situacoes);
                $this->set('licitacoes',$licitacoes);
            }
	}
}
