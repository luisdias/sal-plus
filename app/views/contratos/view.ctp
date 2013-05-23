<div class="contratos view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Contrato</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Situação'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($contrato['Situacao']['title'], array('controller' => 'situacoes', 'action' => 'view', $contrato['Situacao']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Número'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['numero']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Objeto'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['objeto']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Regime Execução'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['regime_execucao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Global'); ?></strong></td>
		<td width="574"><span class="floatright"><?php echo $this->Number->format($contrato['Contrato']['valor_global'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?>
			</span></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Parcela'); ?></strong></td>
		<td width="574"><span class="floatright"><?php echo $this->Number->format($contrato['Contrato']['valor_parcela'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?>
                    </span></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Condições Pagto'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['condicoes_pagto']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Critérios'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['criterios']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Base'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['dt_base']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Início'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['dt_inicio']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Prazo Vigência'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['prazo_vigencia']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Conclusão'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['dt_conclusao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Assinatura'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['dt_assinatura']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Publicação'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['dt_publicacao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Veículo Publicação'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['veiculo_publicacao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Reajuste'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($contrato['Reajuste']['title'], array('controller' => 'reajustes', 'action' => 'view', $contrato['Reajuste']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Atualização Monetária'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['atualizacao_monetaria']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Garantia'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($contrato['Garantia']['title'], array('controller' => 'garantias', 'action' => 'view', $contrato['Garantia']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Percentual Garantia'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['percentual_garantia']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Numero Processo'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['numero_processo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Ano Processo'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['ano_processo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Licitação'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($contrato['Licitacao']['num_edital'], array('controller' => 'licitacoes', 'action' => 'view', $contrato['Licitacao']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Documento'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['documento']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Número Empenho'); ?></strong></td>
		<td width="574"><?php echo $contrato['Contrato']['numero_empenho']; ?></td>
		</tr>
		<tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $contrato['Contrato'])); ?>                    
    </table>
</div>
</div>
<?php echo $this->element('aditivos',array('currentModel' => $contrato)); ?>
<?php echo $this->element('ocorrencias',array('currentModel' => $contrato)); ?>
<?php echo $this->element('recursos',array('currentModel' => $contrato)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->