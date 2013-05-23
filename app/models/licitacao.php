<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Licitacao extends AppModel {
        var $displayField = 'num_edital';
        public $actsAs = array('Searchable');    

        // array('name' => 'title', 'type' => 'like'),
        // array('name' => 'status', 'type' => 'value'),
        // array('name' => 'blog_id', 'type' => 'value'),
        // array('name' => 'search', 'type' => 'like', 'field' => 'Article.description'),
        // array('name' => 'range', 'type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Article.views BETWEEN ? AND ?'),
        // array('name' => 'tags', 'type' => 'subquery', 'method' => 'findByTags', 'field' => 'Article.id'),       
        public $filterArgs = array(
            array('name'=>'num_edital', 'type' => 'like')
	);       
	var $name = 'Licitacao';
	var $validate = array(
		'modalidade_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione a modalidade',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipolicitacao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o tipo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'usuario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contratante_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Selecione o contratante',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                ),    
		'dt_abertura' => array(
				'rule' => array('date','dmy'),
				'message' => 'Data inválida (dd/mm/aaaa)'
                    ),                    
		'num_edital' => array(
				'rule' => 'notEmpty',
				'message' => 'Edital é obrigatório'
                    ),
		'vlr_lic' => array(
				'rule' => 'numeric',
				'message' => 'Valor deve ser numérico'
			
                    ),              
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Modalidade' => array(
			'className' => 'Modalidade',
			'foreignKey' => 'modalidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipolicitacao' => array(
			'className' => 'Tipolicitacao',
			'foreignKey' => 'tipolicitacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contratante' => array(
			'className' => 'Contratante',
			'foreignKey' => 'contratante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'licitacao_id',
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
		'Lote' => array(
			'className' => 'Lote',
			'foreignKey' => 'licitacao_id',
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
		'Resultado' => array(
			'className' => 'Resultado',
			'foreignKey' => 'licitacao_id',
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
            if (!empty($this->data['Licitacao']['dt_abertura'])) {
                $this->data['Licitacao']['dt_abertura'] = $this->dateFormatBeforeSave($this->data['Licitacao']['dt_abertura']);
                }    
            return true;            
        }
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            //if ($primary) { // apenas se a query for usada pelo controller licitacao
                foreach ($results as $key => $val) {
                    if (isset($val['Licitacao']['created'])) {
                        $results[$key]['Licitacao']['created'] = $this->dateFormatAfterFind($val['Licitacao']['created'],true);                    
                    }
                    if (isset($val['Licitacao']['modified'])) {
                        $results[$key]['Licitacao']['modified'] = $this->dateFormatAfterFind($val['Licitacao']['modified'],true);                    
                    }                    
                    if (isset($val['Licitacao']['dt_abertura'])) {
                        $results[$key]['Licitacao']['dt_abertura'] = $this->dateFormatAfterFind($val['Licitacao']['dt_abertura']);                    
                    }            
                }            
                return $results;
            //}
        }
        
}
