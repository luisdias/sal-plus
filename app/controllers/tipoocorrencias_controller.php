<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class TipoocorrenciasController extends AppController {

	var $name = 'Tipoocorrencias';
        var $ptSingularName = 'Tipo de ocorrência';
        var $paginate = array('limit'=>10, 'order'=>array('Tipoocorrencia.title'=>'asc'));
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Tipoocorrencia->parseCriteria($this->passedArgs);
                $this->set('tipoocorrencias', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {	
            if ($this->action == 'view' ) {
                $ocorrencias = $this->Tipoocorrencia->Ocorrencia->find('list');                
                $contratos = $this->Tipoocorrencia->Ocorrencia->Contrato->find('list');                
                $tipoocorrencias = $this->Tipoocorrencia->find('list');                
                $this->set('ocorrencias',$ocorrencias);
                $this->set('contratos',$contratos);
                $this->set('tipoocorrencias',$tipoocorrencias);
            }
	}
}
