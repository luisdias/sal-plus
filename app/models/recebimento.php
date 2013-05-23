<?php
class Recebimento extends AppModel {
	var $name = 'Recebimento';
	var $displayField = 'numero_documento';
        public $actsAs = array('Searchable');
        public $filterArgs = array(
		array('name'=>'contrato_id', 'type' => 'value'),
	);          
	var $validate = array(
		'contrato_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Selecione o contrato',
			),
		),
		'dt_emissao' => array(
                    'allowEmpty' =>  false,                    
                    'rule' => array('date','dmy'),
                    'message' => 'Data inválida (dd/mm/aaaa)',                    
		),
		'dt_vencto' => array(
                    'allowEmpty' =>  false,                    
                    'rule' => array('date','dmy'),
                    'message' => 'Data inválida (dd/mm/aaaa)',                    
		),
		'numero_documento' => array(
			'notempty' => array(
                            'rule' => array('notempty'),
                            'message' => 'Número de documento é obrigatório',
			),
		),
		'valor_parcela' => array(
			'numeric' => array(
                            'rule' => array('numeric'),
                            'message' => 'Valor parcela deve ser numérico',
                            'allowEmpty' => false,
			),                    
		),
		'dt_pagto' => array(
                    'date' => array(
                        'allowEmpty' =>  true,
                        'rule' => array('date','dmy'),
                        'message' => 'Data inválida (dd/mm/aaaa)',
                    ),
                    'payment'=>array(
                        'rule' => array('validatePayment'),
                        'message' => 'Data pagto e Valor pago são obrigatórios'
                    )
		),
		'valor_pago' => array(
			'numeric' => array(
                            'rule' => array('numeric'),
                            'message' => 'Valor pago deve ser numérico',
                            'allowEmpty' => true,
			),
                        'payment'=>array(
                            'rule' => array('validatePayment'),
                            'message' => 'Data pagto e Valor pago são obrigatórios'
                        )
		),

	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
        var $virtualFields = array(
            'dia_da_semana' => 'DAYOFWEEK(dt_vencto)',
            'dias_restantes' => 'DATEDIFF(dt_vencto,NOW())'
        );
        
	var $belongsTo = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contrato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        function validatePayment() {
            return ( !empty($this->data['Recebimento']['dt_pagto']) && !empty($this->data['Recebimento']['valor_pago']) );
        }
        
        function beforeSave($options = array()) {
            parent::beforeSave($options);
            if (!empty($this->data['Recebimento']['dt_emissao'])) {
                $this->data['Recebimento']['dt_emissao'] = $this->dateFormatBeforeSave($this->data['Recebimento']['dt_emissao']);
                }
            if (!empty($this->data['Recebimento']['dt_vencto'])) {
                $this->data['Recebimento']['dt_vencto'] = $this->dateFormatBeforeSave($this->data['Recebimento']['dt_vencto']);
                }
            if (!empty($this->data['Recebimento']['dt_pagto'])) {
                $this->data['Recebimento']['dt_pagto'] = $this->dateFormatBeforeSave($this->data['Recebimento']['dt_pagto']);
                }                
            return true;            
        }        
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);

            foreach ($results as $key => $val) {
                if (isset($val['Recebimento']['created'])) {
                    $results[$key]['Recebimento']['created'] = $this->dateFormatAfterFind($val['Recebimento']['created'],false);                    
                }
                if (isset($val['Recebimento']['modified'])) {
                    $results[$key]['Recebimento']['modified'] = $this->dateFormatAfterFind($val['Recebimento']['modified'],false);                    
                }
                if (isset($val['Recebimento']['dt_emissao']) && $val['Recebimento']['dt_emissao'] != '0000-00-00') {
                    $results[$key]['Recebimento']['dt_emissao'] = $this->dateFormatAfterFind($val['Recebimento']['dt_emissao'],false);
                } else {
                    $results[$key]['Recebimento']['dt_emissao'] = null;
                }
                if (isset($val['Recebimento']['dt_vencto']) && $val['Recebimento']['dt_vencto'] != '0000-00-00') {
                    $results[$key]['Recebimento']['dt_vencto'] = $this->dateFormatAfterFind($val['Recebimento']['dt_vencto'],false);
                } else {
                    $results[$key]['Recebimento']['dt_vencto'] = null;
                }
                if (isset($val['Recebimento']['dt_pagto']) && $val['Recebimento']['dt_pagto'] != '0000-00-00') {
                    $results[$key]['Recebimento']['dt_pagto'] = $this->dateFormatAfterFind($val['Recebimento']['dt_pagto'],false);
                } else {
                    $results[$key]['Recebimento']['dt_pagto'] = null;
                }                
            }            
            return $results;

        }         
        
}
