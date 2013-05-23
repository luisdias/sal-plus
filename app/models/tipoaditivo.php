<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Tipoaditivo extends AppModel {
    
        public $actsAs = array('Searchable');
        
	var $name = 'Tipoaditivo';
	var $displayField = 'title';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Descrição é obrigatória',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
        public $filterArgs = array(
            array('name'=>'title', 'type' => 'like')
	);
        
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Aditivo' => array(
			'className' => 'Aditivo',
			'foreignKey' => 'tipoaditivo_id',
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
                if (isset($val['Tipoaditivo']['created'])) {
                    $results[$key]['Tipoaditivo']['created'] = $this->dateFormatAfterFind($val['Tipoaditivo']['created'],true);                    
                }
                if (isset($val['Tipoaditivo']['modified'])) {
                    $results[$key]['Tipoaditivo']['modified'] = $this->dateFormatAfterFind($val['Tipoaditivo']['modified'],true);                    
                }
            }            
            return $results;
        }          
}
