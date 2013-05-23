<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Pessoa extends AppModel {
    
        public $actsAs = array('Searchable');
        
	var $name = 'Pessoa';
	var $displayField = 'nome';
	var $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Nome é obrigatório',
			),
		),
                'email' => array(
                    'email' => array(
                         'rule' => array('email', false),
                         'message' => 'Entre um email válido',
                         'allowEmpty' => true
                    ),                     
                 )
	);
        
        public $filterArgs = array(
            array('name'=>'nome', 'type' => 'like')
	);
        
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'pessoa_id',
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
                if (isset($val['Pessoa']['created'])) {
                    $results[$key]['Pessoa']['created'] = $this->dateFormatAfterFind($val['Pessoa']['created'],true);                    
                }
                if (isset($val['Pessoa']['modified'])) {
                    $results[$key]['Pessoa']['modified'] = $this->dateFormatAfterFind($val['Pessoa']['modified'],true);                    
                }
            }            
            return $results;
        }
}
