<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Ocorrencia extends AppModel {
	var $name = 'Ocorrencia';
        public $actsAs = array('Searchable');
        public $filterArgs = array(
		array('name'=>'contrato_id', 'type' => 'value'),
	);        
	var $validate = array(
		'contrato_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o contrato',
				'allowEmpty' => false,
			),
		),            
		'tipoocorrencia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o tipo',
				'allowEmpty' => false,
			),
		),             
		'dt_ocorrencia' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => false,
                        'message' => 'Data inválida (dd/mm/aaaa)'
		),
		'texto_ocorrencia' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Texto é obrigatório',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contrato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipoocorrencia' => array(
			'className' => 'Tipoocorrencia',
			'foreignKey' => 'tipoocorrencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        function beforeSave($options = array()) {
            parent::beforeSave($options);
            if (!empty($this->data['Ocorrencia']['dt_ocorrencia'])) {
                $this->data['Ocorrencia']['dt_ocorrencia'] = $this->dateFormatBeforeSave($this->data['Ocorrencia']['dt_ocorrencia']);
                }
            return true;            
        }         
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            foreach ($results as $key => $val) {
                if (isset($val['Ocorrencia']['created'])) {
                    $results[$key]['Ocorrencia']['created'] = $this->dateFormatAfterFind($val['Ocorrencia']['created'],true);                    
                }
                if (isset($val['Ocorrencia']['modified'])) {
                    $results[$key]['Ocorrencia']['modified'] = $this->dateFormatAfterFind($val['Ocorrencia']['modified'],true);                    
                }                 
                if (isset($val['Ocorrencia']['dt_ocorrencia']) && $val['Ocorrencia']['dt_ocorrencia'] != '0000-00-00') {
                    $results[$key]['Ocorrencia']['dt_ocorrencia'] = $this->dateFormatAfterFind($val['Ocorrencia']['dt_ocorrencia']);                    
                } else {
                    $results[$key]['Ocorrencia']['dt_ocorrencia'] = null;
                }
            }
            return $results;
        }        
}
