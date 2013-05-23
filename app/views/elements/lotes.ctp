<div class="related">
	<?php if (!empty($currentModel['Lote'])):?>
	<h3><?php __('Lotes relacionados');?></h3>
        <table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Número'); ?></th>
		<th><?php __('Prazo'); ?></th>
                <th><?php __('Valor'); ?></th>
                <th class="actions"><?php __('Ações');?></th>                
	</tr>
	<?php
                $vlr_lote_total = 0;
		$i = 0;
		foreach ($currentModel['Lote'] as $lote):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
                        $vlr_lote_total += $lote['vlr_lote'];
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lote['num_lote'];?></td>
			<td><?php echo $lote['prazo_lote'];?></td>                        
			<td><span class="floatright"><?php echo $this->Number->format($lote['vlr_lote'],
                                array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));?></span></td>
			<td class="actions">
				<?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'lotes', 'action' => 'view', $lote['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'lotes', 'action' => 'edit', $lote['id']),array('escape' => false)); ?>
				<?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'lotes', 'action' => 'delete', $lote['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $lote['id'])); ?>
			</td>                        

		</tr>
	<?php endforeach; ?>
        <?php 
        if ( $currentModel['Licitacao']['vlr_lic'] != $vlr_lote_total )
            echo '<td colspan="2"><span class="floatright" style="color:red;">Alerta = Valor total dos lotes não confere com o da licitação -></span></td>';
        else
            echo '<td colspan="2"></td>';
        echo '<td><span class="floatright">';
        echo $this->Number->format($vlr_lote_total,
                   array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));
        echo '</span></td>';
        ?>                  
	</table>      
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Lote', true), array('controller' => 'lotes', 'action' => 'add'),array('class'=>'button'));?> </li>
        </ul>
    </div>        
</div>