<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Garantia extends AppModel {
    
        public $actsAs = array('Searchable');
        
	var $name = 'Garantia';
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
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'garantia_id',
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
                if (isset($val['Garantia']['created'])) {
                    $results[$key]['Garantia']['created'] = $this->dateFormatAfterFind($val['Garantia']['created'],true);                    
                }
                if (isset($val['Garantia']['modified'])) {
                    $results[$key]['Garantia']['modified'] = $this->dateFormatAfterFind($val['Garantia']['modified'],true);                    
                }                     
            }            
            return $results;

        }          
        
}
