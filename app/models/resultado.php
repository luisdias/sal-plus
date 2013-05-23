<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Resultado extends AppModel {
	var $name = 'Resultado';
        public $actsAs = array('Searchable');        
        public $filterArgs = array(
		array('name'=>'licitacao_id', 'type' => 'value'),
	);         
	var $validate = array(
		'licitacao_id' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Selecione a licitação',
		),
		'empresa_id' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Selecione a empresa',
		),            
		'habilitacao' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
		),
		'vencedor' => array(
			'boolean' => array(
				'rule' => array('boolean'),
			),
		),                    
		'nota_tecnica' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
                    ),                    
		),
		'preco' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
                    ),                    
		),
		'desconto' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
                    ),                    
		),                    
		'nota_de_preco' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
                    ),                    
		),
		'nota_final' => array(
                    'numeric' => array(
                        'rule' => array('numeric'),
                        'message' => 'Campo deve ser numérico',
                        'allowEmpty' => true,
                    ),                    
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
		),
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            foreach ($results as $key => $val) {
                if (isset($val['Resultado']['created'])) {
                    $results[$key]['Resultado']['created'] = $this->dateFormatAfterFind($val['Resultado']['created'],true);                    
                }
                if (isset($val['Resultado']['modified'])) {
                    $results[$key]['Resultado']['modified'] = $this->dateFormatAfterFind($val['Resultado']['modified'],true);                    
                }                           
            }
            return $results;
        }           
        
        function beforeSave($options = array()) {
            if ($this->id == 0) {
                if ($this->find('first', array('conditions' => array(
                    'Resultado.licitacao_id' => $this->data['Resultado']['licitacao_id'], 
                    'Resultado.empresa_id' => $this->data['Resultado']['empresa_id'])))) {
                    return false;
                }
            }
            return true;
        }        
        
}
