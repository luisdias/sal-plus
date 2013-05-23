<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Aditivo extends AppModel {
	var $name = 'Aditivo';
        public $actsAs = array('Searchable');
        public $filterArgs = array(
		array('name'=>'contrato_id', 'type' => 'value'),
	);        
	var $displayField = 'numero';
	var $validate = array(
		'tipoaditivo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o tipo de aditivo',
				'allowEmpty' => false,
			),
		),            
		'contrato_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o contrato',
				'allowEmpty' => false,
			),
		),            
		'numero' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Número é obrigatório',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_global' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo deve ser numérico',
				'allowEmpty' => true,
			),
		),            
		'valor_parcela' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo deve ser numérico',
				'allowEmpty' => true,
			),
		),             
                'dt_assinatura' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => true,
                        'message' => 'Data inválida (dd/mm/aaaa)'
                ),
                'dt_publicacao' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => true,
                        'message' => 'Data inválida (dd/mm/aaaa)'
                ),
		'prazo' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
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
		'Tipoaditivo' => array(
			'className' => 'Tipoaditivo',
			'foreignKey' => 'tipoaditivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        function checkDates() {
            return ( $this->data['Aditivo']['dt_assinatura'] > $this->data['Aditivo']['dt_publicacao'] );
        }
        
        function beforeSave($options = array()) {
            parent::beforeSave($options);
            if (!empty($this->data['Aditivo']['dt_assinatura'])) {
                $this->data['Aditivo']['dt_assinatura'] = $this->dateFormatBeforeSave($this->data['Aditivo']['dt_assinatura']);
                }
            if (!empty($this->data['Aditivo']['dt_publicacao'])) {
                $this->data['Aditivo']['dt_publicacao'] = $this->dateFormatBeforeSave($this->data['Aditivo']['dt_publicacao']);
                }                  
            return true;            
        }        
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);

            foreach ($results as $key => $val) {
                if (isset($val['Aditivo']['created'])) {
                    $results[$key]['Aditivo']['created'] = $this->dateFormatAfterFind($val['Aditivo']['created'],false);                    
                }
                if (isset($val['Aditivo']['modified'])) {
                    $results[$key]['Aditivo']['modified'] = $this->dateFormatAfterFind($val['Aditivo']['modified'],false);                    
                }
                if (isset($val['Aditivo']['dt_assinatura']) && $val['Aditivo']['dt_assinatura'] != '0000-00-00') {
                    $results[$key]['Aditivo']['dt_assinatura'] = $this->dateFormatAfterFind($val['Aditivo']['dt_assinatura'],false);
                } else {
                    $results[$key]['Aditivo']['dt_assinatura'] = null;
                }
                if (isset($val['Aditivo']['dt_publicacao']) && $val['Aditivo']['dt_publicacao'] != '0000-00-00') {
                    $results[$key]['Aditivo']['dt_publicacao'] = $this->dateFormatAfterFind($val['Aditivo']['dt_publicacao'],false);
                } else {
                    $results[$key]['Aditivo']['dt_publicacao'] = null;
                }
            }            
            return $results;

        }          
}
