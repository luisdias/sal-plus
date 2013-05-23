<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class TipoeventosController extends AppController {

	var $name = 'Tipoeventos';
        var $ptSingularName = 'Tipo de evento';
        var $paginate = array('limit'=>10, 'order'=>array('title'=>'asc'));        
        
        public $presetVars = array(
                array('field' => 'title', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Tipoevento->parseCriteria($this->passedArgs);
                $this->set('tipoeventos', $this->paginate());
                $this->render('index');
        }          
}
