<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class LicitacoesController extends AppController {

	var $name = 'Licitacoes';
        var $ptSingularName = 'Licitação';
        var $paginate = array('limit'=>10, 'order'=>array('num_edital'=>'asc'));        
        public $presetVars = array(
                array('field' => 'num_edital', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Licitacao->parseCriteria($this->passedArgs);
                $this->set('licitacoes', $this->paginate());
                $this->render('index');
        }          
        /** 
         * método que corre nas actions add,edit e view         
         */
	function setRelated() {	
            if ($this->action == 'view' ) {
                $empresas = $this->Licitacao->Resultado->Empresa->find('list');
                $tipoeventos = $this->Licitacao->Evento->Tipoevento->find('list');
                $this->set('tipoeventos',$tipoeventos);
                $this->set('empresas',$empresas);
            } else {
                $modalidades = $this->Licitacao->Modalidade->find('list');
                $tipolicitacoes = $this->Licitacao->Tipolicitacao->find('list');
                $usuarios = $this->Licitacao->Usuario->find('list');
                $contratantes = $this->Licitacao->Contratante->find('list');
                $eventos = $this->Licitacao->Evento->find('list');
                
                
                $this->set(compact('modalidades', 'tipolicitacoes', 'usuarios', 'contratantes', 'eventos'));
            }
	}       
}
