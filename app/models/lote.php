<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Lote extends AppModel {
	var $name = 'Lote';
        public $actsAs = array('Searchable');        
        public $filterArgs = array(
		array('name'=>'licitacao_id', 'type' => 'value')
	);         
	var $validate = array(
		'licitacao_id' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Selecione a licitação',
		),

		'num_lote' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Número é obrigatório',
		),
            
		'vlr_lote' => array(
                    'rule' => 'numeric',
                    'message' => 'Campo deve ser numérico',
                    'allowEmpty' => false
		),            
		'prazo_lote' => array(
                    'rule' => 'numeric',
                    'message' => 'Campo deve ser numérico',
                    'allowEmpty' => false
		),            
            
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Licitacao' => array(
			'className' => 'Licitacao',
			'foreignKey' => 'licitacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            foreach ($results as $key => $val) {
                if (isset($val['Lote']['created'])) {
                    $results[$key]['Lote']['created'] = $this->dateFormatAfterFind($val['Lote']['created'],true);                    
                }
                if (isset($val['Lote']['modified'])) {
                    $results[$key]['Lote']['modified'] = $this->dateFormatAfterFind($val['Lote']['modified'],true);                    
                }                           
            }
            return $results;
        }         
}
