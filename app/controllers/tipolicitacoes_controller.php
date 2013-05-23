<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class TipolicitacoesController extends AppController {

	var $name = 'Tipolicitacoes';
        var $ptSingularName = 'Tipo';
        var $paginate = array('limit'=>10, 'order'=>array('title'=>'asc'));        
        
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Tipolicitacao->parseCriteria($this->passedArgs);
                $this->set('tipolicitacoes', $this->paginate());
                $this->render('index');
        }          
	function setRelated() {	
            if ($this->action == 'view' ) {
                $modalidades = $this->Tipolicitacao->Licitacao->Modalidade->find('list');
                $tipos = $this->Tipolicitacao->Licitacao->Tipolicitacao->find('list');
                $contratantes = $this->Tipolicitacao->Licitacao->Contratante->find('list');
                $this->set('modalidades',$modalidades);
                $this->set('tipos',$tipos);
                $this->set('contratantes',$contratantes);
            } 
	}         
}
