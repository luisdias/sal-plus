<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Tipoocorrencia extends AppModel {

        public $actsAs = array('Searchable');    
    
	var $name = 'Tipoocorrencia';
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
		'Ocorrencia' => array(
			'className' => 'Ocorrencia',
			'foreignKey' => 'tipoocorrencia_id',
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

}
