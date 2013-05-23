<div class="related">
	<h3><?php __('Aditivos Relacionados');?></h3>
	<?php if (!empty($currentModel['Aditivo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Número'); ?></th>
		<th><?php __('Contrato'); ?></th>
		<th><?php __('Processo'); ?></th>
		<th><?php __('Ano'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Assinatura'); ?></th>
		<th><?php __('Publicação'); ?></th>
		<th><?php __('Veiculo Publicação'); ?></th>
		<th><?php __('Valor Global'); ?></th>
		<th><?php __('Valor Parcela'); ?></th>
		<th><?php __('Prazo'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Aditivo'] as $aditivo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $aditivo['numero'];?></td>
			<td><?php echo $contratos[$aditivo['contrato_id']];?></td>
			<td><?php echo $aditivo['numero_processo'];?></td>
			<td><?php echo $aditivo['ano_processo'];?></td>
			<td><?php echo $tipoaditivos[$aditivo['tipoaditivo_id']];?></td>
			<td><?php echo $aditivo['dt_assinatura'];?></td>
			<td><?php echo $aditivo['dt_publicacao'];?></td>
			<td><?php echo $aditivo['veiculo_publicacao'];?></td>
			<td><?php echo $aditivo['valor_global'];?></td>
			<td><?php echo $aditivo['valor_parcela'];?></td>
			<td><?php echo $aditivo['prazo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'aditivos', 'action' => 'view', $aditivo['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'aditivos', 'action' => 'edit', $aditivo['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'aditivos', 'action' => 'delete', $aditivo['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $aditivo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Aditivo', true), array('controller' => 'aditivos', 'action' => 'add'),array('class'=>'button'));?> </li>
        </ul>
    </div>
</div>
