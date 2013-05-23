<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class UsuariosController extends AppController {

    var $name = 'Usuarios';
    var $paginate = array('limit'=>10, 'order'=>array('name'=>'asc'));        
    
    public $presetVars = array(
            array('field' => 'name', 'type' => 'value'),
    );

    public function find() {
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Usuario->parseCriteria($this->passedArgs);
            $this->set('usuarios', $this->paginate());
            $this->render('index');
    }  
    function login($data = null) {
        $this->layout = 'login';          
    }

    function logout() {    
        $this->Session->destroy();
    	$this->redirect($this->Auth->logout());    
    }	 
//    
//    function beforeForm() {
//        parent::beforeForm();        
//        if (!empty($this->data)) {
//            $this->data['Usuario']['dmpass'] = $this->Auth->password(''); // blank pass hash                 
//            $this->data['Usuario']['senha2'] = $this->Auth->password($this->data['Usuario']['senha2']);
//        }
//    }
    
    function setRelated() {	
        if ($this->action == 'view' ) {
            $modalidades = $this->Usuario->Licitacao->Modalidade->find('list');
            $tipos = $this->Usuario->Licitacao->Tipolicitacao->find('list');
            $contratantes = $this->Usuario->Licitacao->Contratante->find('list');
            $this->set('modalidades',$modalidades);
            $this->set('tipos',$tipos);
            $this->set('contratantes',$contratantes);
        } 
    }    
    
    function senha($id = null) {
        if (empty($this->data)) {
               $this->data = $this->Usuario->read(null, $id);
        } else {
           // faz o hash da senha para o campo hidden para gravação no model
           if ( isset($this->data['Usuario']['tmp_senha']) )
                   $this->data['Usuario']['tmp_senha'] = $this->Auth->password($this->data['Usuario']['nova_senha']);
           if ($this->Usuario->save($this->data)) {
                   $this->Session->setFlash(__('Senha alterada com sucesso', true),'default',array('class'=>'success-msg')); 
                   $this->redirect(array('action'=>'index'));
           } else {
                   $this->Session->setFlash(__('Senhas não conferem. Por favor, tente novamente.', true),'default',array('class'=>'error-msg'));
           }            
        }        
    }
}
