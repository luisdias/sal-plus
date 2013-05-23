<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class TipoaditivosController extends AppController {

	var $name = 'Tipoaditivos';
        var $ptSingularName = 'Tipo de aditivo';
        var $paginate = array('limit'=>10, 'order'=>array('Tipoaditivo.title'=>'asc'));
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Tipoaditivo->parseCriteria($this->passedArgs);
            $this->set('tipoaditivos', $this->paginate());
            $this->render('index');
        }        
        
	function setRelated() {	
            if ($this->action == 'view' ) {
                $contratos = $this->Tipoaditivo->Aditivo->Contrato->find('list');
                $this->set('contratos',$contratos);                
                $tipoaditivos = $this->Tipoaditivo->Aditivo->Tipoaditivo->find('list');
                $this->set('tipoaditivos',$tipoaditivos);
                $aditivos = $this->Tipoaditivo->Aditivo->find('list');
                $this->set('aditivos',$aditivos);
            }
	}
}
