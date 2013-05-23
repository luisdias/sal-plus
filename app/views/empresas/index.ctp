<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button')); 
    ?>
    <h1>Empresas</h1>    
</div> 
<div class="select-bar">
<?php
	echo $form->create('Empresa', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass'])
		));
	echo $form->input('name', array('label'=>'Nome','div' => false));
	echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
	echo $form->end();
?> 
</div>
<?php if ( $empresas != null) { ?>
<div class="table">
    <table class="listing" cellpadding="0" cellspacing="0">
        <tr>
            <th style="width:40%;"><?php echo $this->Paginator->sort('Razão Social','razao_social');?></th>
            <th style="width:40%;"><?php echo $this->Paginator->sort('Nome','name');?></th>         
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php
        $i = 0;
        foreach ($empresas as $empresa):
                $class = null;
                if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                }
        ?>                        
        
	<tr<?php echo $class;?>>
                <td><?php echo $empresa['Empresa']['razao_social']; ?>&nbsp;</td>                
		<td><?php echo $empresa['Empresa']['name']; ?>&nbsp;</td>
                <td class="actions">
                <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $empresa['Empresa']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $empresa['Empresa']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $empresa['Empresa']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a empresa %s?', true), $empresa['Empresa']['name'])); ?>
                </td>
	</tr>        
        <?php endforeach; ?>
    </table>
    <?php echo $this->element('paginator'); ?>
<?php 
} else {
    echo $this->Html->tag('p','Não existem itens para listar');
} ?>       
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->