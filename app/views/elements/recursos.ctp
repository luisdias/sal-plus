<div class="related">
	<h3><?php __('Recursos Relacionados');?></h3>
	<?php if (!empty($currentModel['Recurso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Contrato'); ?></th>
		<th><?php __('Pessoa'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Recurso'] as $recurso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contratos[$recurso['contrato_id']];?></td>
			<td><?php echo $pessoas[$recurso['pessoa_id']];?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'recursos', 'action' => 'view', $recurso['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'recursos', 'action' => 'edit', $recurso['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'recursos', 'action' => 'delete', $recurso['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $recurso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
                <li><?php echo $this->Html->link(__('Novo Recurso', true), array('controller' => 'recursos', 'action' => 'add'),array('class'=>'button'));?> </li>
        </ul>
    </div>
</div>
