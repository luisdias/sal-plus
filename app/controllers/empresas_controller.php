<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class EmpresasController extends AppController {

	var $name = 'Empresas';
        var $paginate = array('limit'=>10, 'order'=>array('name'=>'asc'));        
        public $presetVars = array(
                array('field' => 'name', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Empresa->parseCriteria($this->passedArgs);
                $this->set('empresas', $this->paginate());
                $this->render('index');
        }          
	function setRelated() {
            if ($this->action == 'view' ) {
                $licitacoes =  $this->Empresa->Licitacao->find('list');
                $modalidades = $this->Empresa->Licitacao->Modalidade->find('list');
                $tipos = $this->Empresa->Licitacao->Tipolicitacao->find('list');
                $contratantes = $this->Empresa->Licitacao->Contratante->find('list');
                $this->set(compact('licitacoes','modalidades','tipos','contratantes'));
            }
	}
}
