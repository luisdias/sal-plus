<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Contrato extends AppModel {
    
        public $actsAs = array('Searchable');
        
	var $name = 'Contrato';
	var $displayField = 'numero';
	var $validate = array(
		'situacao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione a situação',
				'allowEmpty' => false,
			),
		),            
		'licitacao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione a licitação',
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
                'dt_base' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => true,
                        'message' => 'Data inválida (dd/mm/aaaa)'
                ),
                'dt_inicio' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => true,                    
                        'message' => 'Data inválida (dd/mm/aaaa)'
                ),            
                'dt_conclusao' => array(
                        'rule' => array('date','dmy'),
                        'allowEmpty' => true,                    
                        'message' => 'Data inválida (dd/mm/aaaa)'
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
	);
        
        public $filterArgs = array(
            array('name'=>'numero', 'type' => 'like')
	);         

        var $virtualFields = array(
            'dia_da_semana' => 'DAYOFWEEK(dt_conclusao)',
            'dias_restantes' => 'DATEDIFF(dt_conclusao,NOW())'
        );        
        
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Situacao' => array(
			'className' => 'Situacao',
			'foreignKey' => 'situacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Reajuste' => array(
			'className' => 'Reajuste',
			'foreignKey' => 'reajuste_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Garantia' => array(
			'className' => 'Garantia',
			'foreignKey' => 'garantia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Licitacao' => array(
			'className' => 'Licitacao',
			'foreignKey' => 'licitacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Aditivo' => array(
			'className' => 'Aditivo',
			'foreignKey' => 'contrato_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Ocorrencia' => array(
			'className' => 'Ocorrencia',
			'foreignKey' => 'contrato_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'contrato_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Recebimento' => array(
			'className' => 'Recebimento',
			'foreignKey' => 'contrato_id',
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

        function beforeSave($options = array()) {
            parent::beforeSave($options);
            if (!empty($this->data['Contrato']['dt_base'])) {
                $this->data['Contrato']['dt_base'] = $this->dateFormatBeforeSave($this->data['Contrato']['dt_base']);
                }
            if (!empty($this->data['Contrato']['dt_inicio'])) {
                $this->data['Contrato']['dt_inicio'] = $this->dateFormatBeforeSave($this->data['Contrato']['dt_inicio']);
                }
            if (!empty($this->data['Contrato']['dt_conclusao'])) {
                $this->data['Contrato']['dt_conclusao'] = $this->dateFormatBeforeSave($this->data['Contrato']['dt_conclusao']);
                }  
            if (!empty($this->data['Contrato']['dt_assinatura'])) {
                $this->data['Contrato']['dt_assinatura'] = $this->dateFormatBeforeSave($this->data['Contrato']['dt_assinatura']);
                }
            if (!empty($this->data['Contrato']['dt_publicacao'])) {
                $this->data['Contrato']['dt_publicacao'] = $this->dateFormatBeforeSave($this->data['Contrato']['dt_publicacao']);
                }                
            return true;            
        }         
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);

            foreach ($results as $key => $val) {
                if (isset($val['Contrato']['created']) ) {
                    $results[$key]['Contrato']['created'] = $this->dateFormatAfterFind($val['Contrato']['created'],false);
                }
                if (isset($val['Contrato']['modified'])) {
                    $results[$key]['Contrato']['modified'] = $this->dateFormatAfterFind($val['Contrato']['modified'],false);
                }
                if (isset($val['Contrato']['dt_base'])&& $val['Contrato']['dt_base'] != '0000-00-00') {
                    $results[$key]['Contrato']['dt_base'] = $this->dateFormatAfterFind($val['Contrato']['dt_base'],false);
                } else {
                    $results[$key]['Contrato']['dt_base'] = null;
                }
                if (isset($val['Contrato']['dt_inicio']) && $val['Contrato']['dt_inicio'] != '0000-00-00') {
                    $results[$key]['Contrato']['dt_inicio'] = $this->dateFormatAfterFind($val['Contrato']['dt_inicio'],false);
                } else {
                    $results[$key]['Contrato']['dt_inicio'] = null;
                }
                if (isset($val['Contrato']['dt_conclusao']) && $val['Contrato']['dt_conclusao'] != '0000-00-00') {
                    $results[$key]['Contrato']['dt_conclusao'] = $this->dateFormatAfterFind($val['Contrato']['dt_conclusao'],false);
                } else {
                    $results[$key]['Contrato']['dt_conclusao'] = null;
                }
                if (isset($val['Contrato']['dt_assinatura']) && $val['Contrato']['dt_assinatura'] != '0000-00-00') {
                    $results[$key]['Contrato']['dt_assinatura'] = $this->dateFormatAfterFind($val['Contrato']['dt_assinatura'],false);
                } else {
                    $results[$key]['Contrato']['dt_assinatura'] = null;
                }
                if (isset($val['Contrato']['dt_publicacao']) && $val['Contrato']['dt_publicacao'] != '0000-00-00') {
                    $results[$key]['Contrato']['dt_publicacao'] = $this->dateFormatAfterFind($val['Contrato']['dt_publicacao'],false);
                } else {
                    $results[$key]['Contrato']['dt_publicacao'] = null;
                }
                
            }            
            return $results;

        }         
        
}
