<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */
class MapasController extends AppController {
        var $uses = array('Recebimento','Contrato','Evento');
	var $name = 'Mapas';       
        
        function index() {
            $contratos = $this->Contrato->find('all',
                    array(
                        'conditions' => array('Contrato.dt_conclusao >= ' => date('Y-m-d')),                        
                        'recursive' => 1,
                        'fields' => array(
                            'Contrato.id',
                            'Contrato.numero',
                            'Contrato.dt_conclusao', 
                            'Contrato.dia_da_semana', 
                            'Contrato.dias_restantes',                             
                         ),
                        'order' => array('Contrato.dias_restantes')
                         )
                    );
            $this->set('contratos',$contratos);
            
            $contas_a_receber = $this->Recebimento->find('all',
                    array(
                        'conditions' => array('Recebimento.dt_pagto = ' => '0000-00-00','Recebimento.dt_vencto >= ' => date('Y-m-d')),
                        'recursive' => 1,
                        'fields' => array(
                            'Recebimento.id', 
                            'Recebimento.contrato_id',
                            'Recebimento.dia_da_semana', 
                            'Recebimento.dias_restantes',                             
                            'Contrato.numero',
                            'Recebimento.dt_emissao', 
                            'Recebimento.dt_vencto', 
                            'Recebimento.dt_pagto', 
                            'Recebimento.numero_documento', 
                            'Recebimento.valor_parcela', 
                         ),
                        'order' => array('Recebimento.contrato_id','Recebimento.dt_vencto')
                         )
                    );
            $this->set('contas_a_receber',$contas_a_receber);
            
            $contas_em_atraso = $this->Recebimento->find('all',
                    array(
                        'conditions' => array('Recebimento.dt_pagto = ' => '0000-00-00','Recebimento.dt_vencto < ' => date('Y-m-d')),
                        'recursive' => 1,
                        'fields' => array(
                            'Recebimento.id', 
                            'Recebimento.contrato_id',
                            'Recebimento.dia_da_semana', 
                            'Recebimento.dias_restantes',                             
                            'Contrato.numero',
                            'Recebimento.dt_emissao', 
                            'Recebimento.dt_vencto', 
                            'Recebimento.dt_pagto', 
                            'Recebimento.numero_documento', 
                            'Recebimento.valor_parcela', 
                         ),
                        'order' => array('Recebimento.contrato_id','Recebimento.dt_vencto')
                         )
                    );
            $this->set('contas_em_atraso',$contas_em_atraso);            
            
            $eventos = $this->Evento->find('all',
                    array(
                        'conditions' => array('Evento.dt_eve >=' => date('Y-m-d')),
                        'recursive' => 1,
                        'fields' => array(
                            'Evento.id', 
                            'Evento.dt_eve', 
                            'Evento.dia_da_semana', 
                            'Evento.dias_restantes', 
                            'Evento.texto_eve', 
                            'Evento.licitacao_id', 
                            'Evento.tipoevento_id', 
                            'Licitacao.dt_abertura',
                            'Licitacao.num_edital',
                            'Licitacao.modalidade_id',
                            'Licitacao.tipolicitacao_id',
                            'Tipoevento.title'
                         ),
                        'order' => array('Evento.licitacao_id','Evento.dt_eve')
                         )
                    );
            $this->set('eventos',$eventos);

        }        
}
