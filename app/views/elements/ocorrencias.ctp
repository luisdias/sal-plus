<div class="related">
	<h3><?php __('Ocorrências Relacionadas');?></h3>
	<?php if (!empty($currentModel['Ocorrencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Data'); ?></th>
		<th><?php __('Contrato'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Ocorrencia'] as $ocorrencia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ocorrencia['dt_ocorrencia'];?></td>
			<td><?php echo $contratos[$ocorrencia['contrato_id']];?></td>
			<td><?php echo $tipoocorrencias[$ocorrencia['tipoocorrencia_id']];?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'ocorrencias', 'action' => 'view', $ocorrencia['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'ocorrencias', 'action' => 'edit', $ocorrencia['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'ocorrencias', 'action' => 'delete', $ocorrencia['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $ocorrencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nova Ocorrência', true), array('controller' => 'ocorrencias', 'action' => 'add'),array('class'=>'button'));?> </li>
		</ul>
	</div>
</div>        