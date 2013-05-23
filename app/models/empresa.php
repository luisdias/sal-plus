<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Empresa extends AppModel {
        public $actsAs = array('Searchable');    

        public $filterArgs = array(
            array('name'=>'name', 'type' => 'like')
	);       
	var $name = 'Empresa';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'razao_social' => array(			
				'rule' => 'notEmpty',
				'message' => 'Razão Social é obrigatória'
                    ),
		'name' => array(
				'rule' =>  'notEmpty',
				'message' => 'Nome é obrigatório'
                    ),
		'email_01' => array(
                                'allowEmpty' =>  true,
				'rule' =>  array('email'),
				'message' => 'Email inválido',         
                    ),
		'website' => array(
                                'allowEmpty' =>  true,
				'rule' =>  'url',
				'message' => 'Website inválido'
                )
        );
	var $hasMany = array(
		'Resultado' => array(
			'className' => 'Resultado',
			'foreignKey' => 'empresa_id',
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


//	var $hasAndBelongsToMany = array(
//		'Licitacao' => array(
//			'className' => 'Licitacao',
//			'joinTable' => 'resultados',
//			'foreignKey' => 'empresa_id',
//			'associationForeignKey' => 'licitacao_id',
//			'unique' => true,
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'finderQuery' => '',
//			'deleteQuery' => '',
//			'insertQuery' => ''
//		)
//	);
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            //if ($primary) { // apenas se a query for usada pelo controller licitacao
                foreach ($results as $key => $val) {
                    if (isset($val['Empresa']['created'])) {
                        $results[$key]['Empresa']['created'] = $this->dateFormatAfterFind($val['Empresa']['created'],true);                    
                    }
                    if (isset($val['Empresa']['modified'])) {
                        $results[$key]['Empresa']['modified'] = $this->dateFormatAfterFind($val['Empresa']['modified'],true);                    
                    }                     
                }            
                return $results;
            //}
        }  
}