<div class="recebimentos view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Recebimento</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Contrato'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($recebimento['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recebimento['Contrato']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Emissão'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['dt_emissao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Vencto'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['dt_vencto']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Pagto'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['dt_pagto']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Número Documento'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['numero_documento']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Parcela'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['valor_parcela']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Pago'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['valor_pago']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Centro De Custo'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['centro_de_custo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Código Histórico'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['codigo_historico']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Criado'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['created']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Modificado'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['modified']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Modificado por'); ?></strong></td>
		<td width="574"><?php echo $recebimento['Recebimento']['modified_by']; ?></td>
		</tr>
    </table>
</div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->