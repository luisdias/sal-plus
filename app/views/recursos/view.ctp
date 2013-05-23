<div class="recursos view">
<div class="table">
    <table class="view" cellpadding="0" cellspacing="0">
        <tr>
            <th class="full" colspan="2">Recurso</th>        </tr>    
		<tr>
		<td width="172"><strong><?php __('Id'); ?></strong></td>
		<td width="574"><?php echo $recurso['Recurso']['id']; ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Contrato'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($recurso['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recurso['Contrato']['id'])); ?></td>
		</tr>
		<tr>
		<td width="172"><strong><?php __('Pessoa'); ?></strong></td>
		<td width="574"><?php echo $this->Html->link($recurso['Pessoa']['nome'], array('controller' => 'pessoas', 'action' => 'view', $recurso['Pessoa']['id'])); ?></td>
		</tr>
                <?php echo $this->element('adminfields_td',array('currentModel' => $recurso['Recurso'])); ?>
    </table>
</div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->