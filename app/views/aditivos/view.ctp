<div id="center-column">
<div class="aditivos view">

    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Aditivo</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Número'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['numero']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Contrato'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($aditivo['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $aditivo['Contrato']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Número Processo'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['numero_processo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Ano Processo'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['ano_processo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Tipo'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($aditivo['Tipoaditivo']['title'], array('controller' => 'tipoaditivos', 'action' => 'view', $aditivo['Tipoaditivo']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Assinatura'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['dt_assinatura']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Dt Publicação'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['dt_publicacao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Veículo Publicação'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['veiculo_publicacao']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Texto Aditivo'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['texto_aditivo']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Documento'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['documento']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Global'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['valor_global']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Valor Parcela'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['valor_parcela']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Prazo'); ?></strong></td>
		<td width="574"><?php echo $aditivo['Aditivo']['prazo']; ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $aditivo['Aditivo'])); ?>
    </table>

</div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->