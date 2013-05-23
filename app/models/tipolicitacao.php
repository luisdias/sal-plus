<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Tipolicitacao extends AppModel {
        public $actsAs = array('Searchable');    

        // array('name' => 'title', 'type' => 'like'),
        // array('name' => 'status', 'type' => 'value'),
        // array('name' => 'blog_id', 'type' => 'value'),
        // array('name' => 'search', 'type' => 'like', 'field' => 'Article.description'),
        // array('name' => 'range', 'type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Article.views BETWEEN ? AND ?'),
        // array('name' => 'tags', 'type' => 'subquery', 'method' => 'findByTags', 'field' => 'Article.id'),       
        public $filterArgs = array(
            array('name'=>'title', 'type' => 'like')
	);       
	var $name = 'Tipolicitacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'title' => array(
				'rule' => 'notEmpty',
				'message' => 'Descrição é obrigatória',
		)
	); 
	var $hasMany = array(
		'Licitacao' => array(
			'className' => 'Licitacao',
			'foreignKey' => 'tipolicitacao_id',
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
                if (isset($val['Tipolicitacao']['created'])) {
                    $results[$key]['Tipolicitacao']['created'] = $this->dateFormatAfterFind($val['Tipolicitacao']['created'],true);                    
                }
                if (isset($val['Tipolicitacao']['modified'])) {
                    $results[$key]['Tipolicitacao']['modified'] = $this->dateFormatAfterFind($val['Tipolicitacao']['modified'],true);                    
                }                           
            }
            return $results;
        }        
}
