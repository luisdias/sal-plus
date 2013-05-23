<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */
class AditivosController extends AppController {

	var $name = 'Aditivos';
        var $fk = 'Contrato.id';
        var $paginate = array('limit'=>10, 'order'=>array('Aditivo.numero'=>'asc'));
        var $components = array('RequestHandler');        
        public $presetVars = array(
            array('field' => 'contrato_id', 'type' => 'value')
        );

        public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Aditivo->parseCriteria($this->passedArgs);
            $this->set('aditivos', $this->paginate());
            $this->setRelated();
            $this->render('index');
        }        
        
        function index() {
            $this->setRelated();
            parent::index();            
        }
        
	function setRelated() {	
            $contratos = $this->Aditivo->Contrato->find('list');
            $tipoaditivos = $this->Aditivo->Tipoaditivo->find('list');
            $this->set('contratos',$contratos);
            $this->set('tipoaditivos',$tipoaditivos);
	}
        
        function file($id = null) {
            if (!$id && empty($this->data)) {
                $this->_flash(__($this->name . ' Inválido(a).', true),'error',array('class'=>'error-msg'));                        
                $this->redirect(array('action'=>'index'));
            } 
            if ($this->RequestHandler->isPost() || $this->RequestHandler->isPut()) {    
                if ($this->data['Aditivo']['documento']['error']==0) {
                    $files = array();
                    $files[] = $this->data['Aditivo']['documento'];
                    $fileOK = $this->uploadFiles('img/aditivos', $files);  
                } else {
                    $fileOk = array();
                }
                if(array_key_exists('urls', $fileOK)) {
                    $this->Aditivo->saveField('documento',$fileOK['urls'][0]);
                    $this->Session->setFlash('O documento foi gravado com sucesso');
                    $this->redirect(array('action' => 'index'));            					
                } else {  
                    $this->Session->setFlash('O aditivo não pode ser gravado. Por favor tente novamente.');
                    $this->redirect(array('action' => 'index'));
                }    
            } else {
               $this->data = $this->Aditivo->read(null, $id);
               $this->setRelated();
            }            

        } // end: file()        
}
