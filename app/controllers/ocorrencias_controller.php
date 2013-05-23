<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class OcorrenciasController extends AppController {

	var $name = 'Ocorrencias';
        var $ptSingularName = 'Ocorrência';
        var $fk = 'Contrato.id';
        var $paginate = array('limit'=>10, 'order'=>array('dt_ocorrencia'=>'desc'));

        public $presetVars = array(
                array('field' => 'contrato_id', 'type' => 'value'),
        );
        
        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Ocorrencia->parseCriteria($this->passedArgs);
            $this->set('ocorrencias', $this->paginate());
            $this->setRelated();            
            $this->render('index');
        }         
        
        function index() {
            $this->setRelated();
            parent::index();            
        }        
        
	function setRelated() {	
            $tipoocorrencias = $this->Ocorrencia->Tipoocorrencia->find('list');
            $contratos = $this->Ocorrencia->Contrato->find('list');
            $this->set('tipoocorrencias',$tipoocorrencias);
            $this->set('contratos',$contratos);
	}
}
