<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Tipoevento extends AppModel {
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
	var $name = 'Tipoevento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'title' => array(
				'rule' => 'notEmpty',
				'message' => 'Descrição é obrigatória',
		)
	); 
	var $hasMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'tipoevento_id',
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
                if (isset($val['Tipoevento']['created'])) {
                    $results[$key]['Tipoevento']['created'] = $this->dateFormatAfterFind($val['Tipoevento']['created'],true);                    
                }
                if (isset($val['Tipoevento']['modified'])) {
                    $results[$key]['Tipoevento']['modified'] = $this->dateFormatAfterFind($val['Tipoevento']['modified'],true);                    
                }                           
            }
            return $results;
        }
}
