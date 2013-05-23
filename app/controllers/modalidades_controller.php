<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class ModalidadesController extends AppController {

	var $name = 'Modalidades';
        var $paginate = array('limit'=>10, 'order'=>array('title'=>'asc'));        
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Modalidade->parseCriteria($this->passedArgs);
                $this->set('modalidades', $this->paginate());
                $this->render('index');
        }          
	function setRelated() {	
            if ($this->action == 'view' ) {
                $modalidades = $this->Modalidade->Licitacao->Modalidade->find('list');
                $tipos = $this->Modalidade->Licitacao->Tipolicitacao->find('list');
                $contratantes = $this->Modalidade->Licitacao->Contratante->find('list');
                $this->set('modalidades',$modalidades);
                $this->set('tipos',$tipos);
                $this->set('contratantes',$contratantes);
            } 
	}         

}
