<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Recurso extends AppModel {
	var $name = 'Recurso';
        public $actsAs = array('Searchable');
        public $filterArgs = array(
		array('name'=>'contrato_id', 'type' => 'value'),
	);        
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'contrato_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o contrato',
				'allowEmpty' => false,
			),
		),            
		'pessoa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione a pessoa',
				'allowEmpty' => false,
			),
		),
	);
	var $belongsTo = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contrato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            
	);
        
        function beforeSave($options = array()) {
            if ($this->find('first', array('conditions' => array(
                'Recurso.contrato_id' => $this->data['Recurso']['contrato_id'], 
                'Recurso.pessoa_id' => $this->data['Recurso']['pessoa_id'])))) {
                return false;
            }
            return true;
        }
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);

            foreach ($results as $key => $val) {
                if (isset($val['Recurso']['created'])) {
                    $results[$key]['Recurso']['created'] = $this->dateFormatAfterFind($val['Recurso']['created'],true);                    
                }
                if (isset($val['Recurso']['modified'])) {
                    $results[$key]['Recurso']['modified'] = $this->dateFormatAfterFind($val['Recurso']['modified'],true);                    
                }
            }            
            return $results;
        }        
}
