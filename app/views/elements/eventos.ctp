<div class="related">
	<?php if (!empty($currentModel['Evento'])):?>
	<h3><?php __('Eventos relacionados');?></h3>
        <table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Data'); ?></th>
		<th><?php __('Texto'); ?></th>
		<th><?php __('Tipo'); ?></th>
                <th class="actions"><?php __('Ações');?></th>  
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Evento'] as $evento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $evento['dt_eve'];?></td>
			<td style="text-align: left;"><?php echo $evento['texto_eve'];?></td>
			<td><?php echo $tipoeventos[$evento['tipoevento_id']];?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'eventos', 'action' => 'view', $evento['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'eventos', 'action' => 'edit', $evento['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'eventos', 'action' => 'delete', $evento['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $evento['id'])); ?>
			</td>                          
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Evento', true), array('controller' => 'eventos', 'action' => 'add', 'fk'=>$currentModel['Licitacao']['id']),array('class'=>'button'));?> </li>
        </ul>
    </div>        
</div>