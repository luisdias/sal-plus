<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Contratante extends AppModel {
        public $actsAs = array('Searchable');    

        // array('name' => 'title', 'type' => 'like'),
        // array('name' => 'status', 'type' => 'value'),
        // array('name' => 'blog_id', 'type' => 'value'),
        // array('name' => 'search', 'type' => 'like', 'field' => 'Article.description'),
        // array('name' => 'range', 'type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Article.views BETWEEN ? AND ?'),
        // array('name' => 'tags', 'type' => 'subquery', 'method' => 'findByTags', 'field' => 'Article.id'),       
        public $filterArgs = array(
            array('name'=>'name', 'type' => 'like')
	);    
        
	var $name = 'Contratante';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'name' => array(
                            'rule' => 'notEmpty',
                            'message' => 'Nome é obrigatório',
		)
        );
	var $hasMany = array(
		'Licitacao' => array(
			'className' => 'Licitacao',
			'foreignKey' => 'contratante_id',
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
            //if ($primary) { // apenas se a query for usada pelo controller licitacao
                foreach ($results as $key => $val) {
                    if (isset($val['Contratante']['created'])) {
                        $results[$key]['Contratante']['created'] = $this->dateFormatAfterFind($val['Contratante']['created'],true);                    
                    }
                    if (isset($val['Contratante']['modified'])) {
                        $results[$key]['Contratante']['modified'] = $this->dateFormatAfterFind($val['Contratante']['modified'],true);                    
                    }                     
                }            
                return $results;
            //}
        }        
        
}
