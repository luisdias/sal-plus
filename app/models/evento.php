<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class Evento extends AppModel {
	var $name = 'Evento';
        
        public $actsAs = array('Searchable');        
        public $filterArgs = array(
		array('name'=>'licitacao_id', 'type' => 'value')
	);     
        
	var $validate = array(
		'licitacao_id' => array(
                        'rule' => 'notEmpty',
                        'message' => 'Selecione a licitação'
                    ),                                            
		'tipoevento_id' => array(
                        'rule' => 'notEmpty',
                        'message' => 'Selecione o tipo'                    
                    ),                                
		'dt_eve' => array(
                        'rule' => array('date','dmy'),
                        'message' => 'Data inválida (dd/mm/aaaa)',
                    ),                    
		'texto_eve' => array(
                        'rule' => 'notEmpty',
                        'message' => 'Texto é obrigatório',                
                    )            
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
		'Tipoevento' => array(
			'className' => 'Tipoevento',
			'foreignKey' => 'tipoevento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)            
	);
        var $virtualFields = array(
            'dia_da_semana' => 'DAYOFWEEK(dt_eve)',
            'dias_restantes' => 'DATEDIFF(dt_eve,NOW())'
        );
        
        function beforeSave($options = array()) {
            parent::beforeSave($options);
            if (!empty($this->data['Evento']['dt_eve'])) {
                $this->data['Evento']['dt_eve'] = $this->dateFormatBeforeSave($this->data['Evento']['dt_eve']);
                }    
            return true;            
        }
        
        function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            foreach ($results as $key => $val) {
                if (isset($val['Evento']['created'])) {
                    $results[$key]['Evento']['created'] = $this->dateFormatAfterFind($val['Evento']['created'],true);                    
                }
                if (isset($val['Evento']['modified'])) {
                    $results[$key]['Evento']['modified'] = $this->dateFormatAfterFind($val['Evento']['modified'],true);                    
                }                 
                if (isset($val['Evento']['dt_eve'])) {
                    $results[$key]['Evento']['dt_eve'] = $this->dateFormatAfterFind($val['Evento']['dt_eve']);                    
                }            
            }
            return $results;
        }        
}
