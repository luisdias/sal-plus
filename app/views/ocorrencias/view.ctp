<div id="center-column">
<div class="ocorrencias view">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Ocorrência</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $ocorrencia['Ocorrencia']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Data'); ?></strong></td>
		<td width="574"><?php echo $ocorrencia['Ocorrencia']['dt_ocorrencia']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Texto'); ?></strong></td>
		<td width="574"><?php echo $ocorrencia['Ocorrencia']['texto_ocorrencia']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Contrato'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($ocorrencia['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $ocorrencia['Contrato']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Tipo'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($ocorrencia['Tipoocorrencia']['title'], array('controller' => 'tipoocorrencias', 'action' => 'view', $ocorrencia['Tipoocorrencia']['id'])); ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $ocorrencia['Ocorrencia'])); ?>
    </table>
</div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->