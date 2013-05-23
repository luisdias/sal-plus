<div class="related">
	<h3><?php __('Contratos Relacionados');?></h3>
	<?php if (!empty($currentModel['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Situação'); ?></th>
		<th><?php __('Número'); ?></th>
		<th><?php __('Início'); ?></th>
		<th><?php __('Prazo Vigência'); ?></th>
		<th><?php __('Número Processo'); ?></th>
		<th><?php __('Ano Processo'); ?></th>
		<th><?php __('Licitação'); ?></th>
		<th><?php __('Empenho'); ?></th>
		<th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Contrato'] as $contrato):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $situacoes[$contrato['situacao_id']];?></td>
			<td><?php echo $contrato['numero'];?></td>
			<td><?php echo $contrato['dt_inicio'];?></td>
			<td><?php echo $contrato['prazo_vigencia'];?></td>
			<td><?php echo $contrato['numero_processo'];?></td>
			<td><?php echo $contrato['ano_processo'];?></td>
			<td><?php echo $licitacoes[$contrato['licitacao_id']];?></td>
			<td><?php echo $contrato['numero_empenho'];?></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'contratos', 'action' => 'view', $contrato['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'contratos', 'action' => 'edit', $contrato['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Contrato', true), array('controller' => 'contratos', 'action' => 'add'), array('class'=>'button'));?> </li>
        </ul>
    </div>
</div>
