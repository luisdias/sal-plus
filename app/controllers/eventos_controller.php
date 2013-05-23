<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class EventosController extends AppController {

	var $name = 'Eventos';
        var $fk = 'Licitacao.id';
        var $paginate = array('limit'=>10, 'order'=>array('dt_eve'=>'asc'));
        
        public $presetVars = array(
                array('field' => 'licitacao_id', 'type' => 'value'),
        );
        
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Evento->parseCriteria($this->passedArgs);
            $this->set('eventos', $this->paginate());
            $this->setRelated();            
            $this->render('index');
        }        
        
        function index() {
            $this->setRelated();
            parent::index();
        }
        
	function setRelated() {
            $licitacoes = $this->Evento->Licitacao->find('list');
            $tipoeventos = $this->Evento->Tipoevento->find('list');                
            $this->set(compact('licitacoes','tipoeventos'));            
	}
        
}