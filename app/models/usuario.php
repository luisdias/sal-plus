<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Usuario extends AppModel {
        public $actsAs = array('Searchable');    

        // array('name' => 'title', 'type' => 'like'),
        // array('name' => 'status', 'type' => 'value'),
        // array('name' => 'blog_id', 'type' => 'value'),
        // array('name' => 'search', 'type' => 'like', 'field' => 'Article.description'),
        // array('name' => 'range', 'type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Article.views BETWEEN ? AND ?'),
        // array('name' => 'tags', 'type' => 'subquery', 'method' => 'findByTags', 'field' => 'Article.id'),       
        public $filterArgs = array(
            array('name'=>'name', 'type' => 'like')
	);     
	var $name = 'Usuario';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nome é obrigatório',
			),
		),
		'login' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Login é obrigatório',
			),
                         'unique' => array(
                                'rule' => 'isUnique',
                                'message' => 'Login já está em uso',
                        ),                         
                        'length' => array(
                            'rule' => array('minLength', 5),  
                            'message' => 'Tamanho mínmo de login = 5 caracteres'
                        )
		),
		'nova_senha' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Senha é obrigatória',
                                'on' => 'udpate'
			),
                        'length' => array(
                            'rule' => array('minLength', 5),  
                            'message' => 'Tamanho mínmo de senha = 5 caracteres',
                            'on' => 'update'
                        ),                    
                        'passwordConfirm' => array(
                            'rule' => 'checkPasswords',
                            'message' => 'Senhas não são iguais',
                            'on' => 'update'
                        )
		)
	);
//        function beforeSave($options = array()) {
//            parent::beforeSave($options);
//            //echo $this->data['Usuario']['nova_senha'];
//                    
//        }     
        
        function checkPasswords() {
            if ($this->data['Usuario']['nova_senha'] == $this->data['Usuario']['confirma_senha'])  {
                $this->data['Usuario']['senha'] = $this->data['Usuario']['tmp_senha'];
                return true; 
            }
                
            else
                return false; 
        }         
        
        
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Licitacao' => array(
			'className' => 'Licitacao',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            foreach ($results as $key => $val) {
                if (isset($val['Usuario']['created'])) {
                    $results[$key]['Usuario']['created'] = $this->dateFormatAfterFind($val['Usuario']['created'],true);                    
                }
                if (isset($val['Usuario']['modified'])) {
                    $results[$key]['Usuario']['modified'] = $this->dateFormatAfterFind($val['Usuario']['modified'],true);                    
                }                           
            }
            return $results;
        }  
}