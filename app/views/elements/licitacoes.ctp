<?php
/**
    SAL - Sistema de Acompanhamento de Licitações
    Copyright (C) 2011  Smartbyte - Luís Dias

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    Contact : contato@smartbyte.com.br
 
 */
?>
<div class="related">
	<h3><?php __('Licitações relacionadas');?></h3>
	<?php if (!empty($currentModel['Licitacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Status'); ?></th>
		<th><?php __('Edital'); ?></th>
		<th><?php __('Código'); ?></th>                
		<th><?php __('Índice'); ?></th>
		<th><?php __('Data Abertura'); ?></th>
		<th><?php __('Modalidade'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Valor'); ?></th>
                <th class="actions"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currentModel['Licitacao'] as $licitacao):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $licitacao['status'];?></td>
			<td><?php echo $licitacao['num_edital'];?></td>
			<td><?php echo $licitacao['cl'];?></td>
                        <td><?php echo $licitacao['indice'];?></td>
			<td><?php echo $licitacao['dt_abertura'];?></td>
			<td><?php echo $modalidades[$licitacao['modalidade_id']];?></td>
			<td><?php echo $tipos[$licitacao['tipolicitacao_id']];?></td>
			<td><span class="floatright"><?php echo $this->Number->format($licitacao['vlr_lic'],
                            array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));?></span></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'licitacoes', 'action' => 'view', $licitacao['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'licitacoes', 'action' => 'edit', $licitacao['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'licitacoes', 'action' => 'delete', $licitacao['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $licitacao['id'])); ?>
			</td>                        
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Nova Licitação', true), array('controller' => 'licitacoes', 'action' => 'add'),array('class'=>'button'));?> </li>
        </ul>
    </div>        
</div>