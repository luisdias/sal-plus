<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class LotesController extends AppController {

	var $name = 'Lotes';
        var $fk = 'Licitacao.id';
        var $paginate = array('limit'=>10, 'order'=>array('num_lote'=>'asc'));

        public $presetVars = array(
                array('field' => 'licitacao_id', 'type' => 'value'),
        );
        
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Lote->parseCriteria($this->passedArgs);
            $this->set('lotes', $this->paginate());
            $this->setRelated();            
            $this->render('index');
        }        
        
        function index() {
            $this->setRelated();
            parent::index();
        }
        
	function setRelated() {
            // com a opcao compact é passado para a view um array 
            // com ids e num_edital ( displayfield defindo no model licitacao )
            $licitacoes = $this->Lote->Licitacao->find('list');
            $this->set(compact('licitacoes'));            
	}
}
