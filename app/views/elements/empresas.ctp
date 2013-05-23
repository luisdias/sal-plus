<div class="related">
	<?php if (!empty($currentModel['Empresa'])):?>
	<h3><?php __('Empresas e Resultados relacionados');?></h3>    
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Razão Social'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Habilitação'); ?></th>
		<th><?php __('Nota técnica'); ?></th>
		<th><?php __('Preço'); ?></th>
		<th><?php __('Desconto'); ?></th>
		<th><?php __('Nota de preço'); ?></th>
		<th><?php __('Nota final'); ?></th>
		<th><?php __('Vencedor'); ?></th>
                <th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Empresa'] as $empresa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $empresa['razao_social'];?></td>
			<td><?php echo $empresa['name'];?></td>
			<td><?php echo ( $empresa['Resultado']['habilitacao'] == 0 ? 'N' : 'S' );?></td>                       
			<td><span class="floatright"><?php echo $empresa['Resultado']['nota_tecnica'];?></span></td>
			<td><span class="floatright"><?php echo $empresa['Resultado']['preco'];?></span></td>
			<td><span class="floatright"><?php echo $empresa['Resultado']['desconto'];?></span></td>
			<td><span class="floatright"><?php echo $empresa['Resultado']['nota_de_preco'];?></span></td>
			<td><span class="floatright"><?php echo $empresa['Resultado']['nota_final'];?></span></td>                        
			<td><?php echo ( $empresa['Resultado']['vencedor'] == 0 ? 'N' : 'S' );?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'resultados', 'action' => 'view', $empresa['Resultado']['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'resultados', 'action' => 'edit', $empresa['Resultado']['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'resultados', 'action' => 'delete', $empresa['Resultado']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $empresa['Resultado']['id'])); ?>
			</td>                        
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Resultado', true), array('controller' => 'resultados', 'action' => 'add'),array('class'=>'button'));?> </li>
        </ul>
    </div>        
</div>