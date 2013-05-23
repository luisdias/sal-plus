<div class="empresas view">
<h2><?php  __('Empresa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Razão social'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['razao_social']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CNPJ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['cnpj']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Endereço'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['endereco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Complemento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['complemento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bairro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['bairro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['cidade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['estado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cep'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['cep']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['telefone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['website']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['tipo_emp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contato'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['contato_01']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['telefone_01']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empresa['Empresa']['email_01']; ?>
			&nbsp;
		</dd>
                <?php echo $this->element('adminfields',
                        array('currentModel' => $empresa['Empresa'],'class'=>$class,'i'=>$i)); ?>
	</dl>
</div>
<div class="related">
	<h3><?php __('Resultados relacionados');?></h3>
	<?php if (!empty($empresa['Resultado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Licitação'); ?></th>
		<th><?php __('Habilitação'); ?></th>
		<th><?php __('Nota Técnica'); ?></th>
		<th><?php __('Preço'); ?></th>
		<th><?php __('Desconto'); ?></th>
		<th><?php __('Nota de preço'); ?></th>
		<th><?php __('Nota final'); ?></th>
		<th><?php __('Vencedor'); ?></th>
                <th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empresa['Resultado'] as $resultado):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $licitacoes[$resultado['licitacao_id']];?></td>
			<td><?php echo ( $resultado['habilitacao'] == 0 ? 'N' : 'S' );?></td>                        
			<td><?php echo $resultado['nota_tecnica'];?></td>
			<td><?php echo $resultado['preco'];?></td>
			<td><?php echo $resultado['desconto'];?></td>
			<td><?php echo $resultado['nota_de_preco'];?></td>
			<td><?php echo $resultado['nota_final'];?></td>
			<td><?php echo ( $resultado['vencedor'] == 0 ? 'N' : 'S' );?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Consultar', true), array('controller' => 'resultados', 'action' => 'view', $resultado['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'resultados', 'action' => 'edit', $resultado['id'])); ?>
				<?php echo $this->Html->link(__('Excluir', true), array('controller' => 'resultados', 'action' => 'delete', $resultado['id']), null, sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $resultado['id'])); ?>
			</td>                        
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<?php echo $this->element('licitacoes',array('currentModel' => $empresa)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->