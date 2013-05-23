<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class ContratantesController extends AppController {

	var $name = 'Contratantes';
        var $paginate = array('limit'=>10, 'order'=>array('name'=>'asc'));
        public $presetVars = array(
                array('field' => 'name', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Contratante->parseCriteria($this->passedArgs);
                $this->set('contratantes', $this->paginate());
                $this->render('index');
        }        
        
        /** 
         * método que corre nas actions add,edit e view         
         */
	function setRelated() {	
            if ($this->action == 'view' ) {
                $modalidades = $this->Contratante->Licitacao->Modalidade->find('list');
                $tipos = $this->Contratante->Licitacao->Tipolicitacao->find('list');
                $contratantes = $this->Contratante->Licitacao->Contratante->find('list');
                $this->set('modalidades',$modalidades);
                $this->set('tipos',$tipos);
                $this->set('contratantes',$contratantes);
            } 
	}  
}