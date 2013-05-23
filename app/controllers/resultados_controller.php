<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class ResultadosController extends AppController {

	var $name = 'Resultados';
        var $fk = 'Licitacao.id';
        var $paginate = array('limit'=>10, 'order'=>array('Empresa.name'=>'asc'));        

        public $presetVars = array(
                array('field' => 'licitacao_id', 'type' => 'value'),
        );
        
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Resultado->parseCriteria($this->passedArgs);
            $this->set('resultados', $this->paginate());
            $this->setRelated();            
            $this->render('index');
        }        
        
        function index() {
            $this->setRelated();
            parent::index();
        }
        
	function setRelated() {
            $licitacoes = $this->Resultado->Licitacao->find('list',
                    array('order'=>array('num_edital'))
                    );
            $empresas = $this->Resultado->Empresa->find('list',
                    array('order'=>array('name'))
                    );
            $this->set(compact('licitacoes', 'empresas'));
	}
}
