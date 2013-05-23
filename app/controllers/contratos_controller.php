<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class ContratosController extends AppController {

	var $name = 'Contratos';
        var $paginate = array('limit'=>10, 'order'=>array('Contrato.created'=>'desc'));
        var $components = array('RequestHandler');        
        public $presetVars = array(
                array('field' => 'numero', 'type' => 'value'),
        );

        public function find() {
                $this->Prg->commonProcess();
                $this->paginate['conditions'] = $this->Contrato->parseCriteria($this->passedArgs);
                $this->set('contratos', $this->paginate());
                $this->render('index');
        }        
        
	function setRelated() {	
            $situacoes = $this->Contrato->Situacao->find('list');
            $reajustes = $this->Contrato->Reajuste->find('list');
            $garantias = $this->Contrato->Garantia->find('list');
            $licitacoes = $this->Contrato->Licitacao->find('list',
                    array('conditions'=>array('Licitacao.status'=>'Encerrada'))
                    );
            $this->set('situacoes',$situacoes);
            $this->set('reajustes',$reajustes);
            $this->set('garantias',$garantias);
            $this->set('licitacoes',$licitacoes);
            if ($this->action == 'view' ) {
                $contratos = $this->Contrato->find('list');
                $this->set('contratos',$contratos);
                $tipoaditivos = $this->Contrato->Aditivo->Tipoaditivo->find('list');
                $pessoas = $this->Contrato->Recurso->Pessoa->find('list');
                $tipoocorrencias = $this->Contrato->Ocorrencia->Tipoocorrencia->find('list');
                $this->set('tipoaditivos',$tipoaditivos);
                $this->set('pessoas',$pessoas);
                $this->set('tipoocorrencias',$tipoocorrencias);
            }
	}
        
        function file($id = null) {
            if (!$id && empty($this->data)) {
                $this->_flash(__($this->name . ' Inválido(a).', true),'error',array('class'=>'error-msg'));                        
                $this->redirect(array('action'=>'index'));
            } 
            if ($this->RequestHandler->isPost() || $this->RequestHandler->isPut()) {    
                if ($this->data['Contrato']['documento']['error']==0) {
                    $files = array();
                    $files[] = $this->data['Contrato']['documento'];
                    $fileOK = $this->uploadFiles('img/contratos', $files);  
                } else {
                    $fileOk = array();
                }
                if(array_key_exists('urls', $fileOK)) {
                    $this->Contrato->saveField('documento',$fileOK['urls'][0]);
                    $this->Session->setFlash('O documento foi gravado com sucesso');
                    $this->redirect(array('action' => 'index'));            					
                } else {  
                    $this->Session->setFlash('O contrato não pode ser gravado. Por favor tente novamente.');
                    $this->redirect(array('action' => 'index'));
                }    
            } else {
               $this->data = $this->Contrato->read(null, $id);
               $this->setRelated();
            }            
        } // end: file()
}
