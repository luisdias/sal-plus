<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Reajuste extends AppModel {
    
        public $actsAs = array('Searchable');
        
	var $name = 'Reajuste';
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
			'foreignKey' => 'reajuste_id',
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
                if (isset($val['Reajuste']['created'])) {
                    $results[$key]['Reajuste']['created'] = $this->dateFormatAfterFind($val['Reajuste']['created'],true);                    
                }
                if (isset($val['Reajuste']['modified'])) {
                    $results[$key]['Reajuste']['modified'] = $this->dateFormatAfterFind($val['Reajuste']['modified'],true);                    
                }
            }            
            return $results;
        }        
}
