<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button')); 
    ?>
    <h1>Tipos de licitação</h1>    
</div> 
<div class="select-bar">
<?php
	echo $form->create('Tipolicitacao', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass'])
		));
	echo $form->input('title', array('label'=>'Descrição','div' => false));
	echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
	echo $form->end();
?> 
</div>
<?php if ( $tipolicitacoes != null) { ?>
<div class="table">
    <table class="listing" cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('Descrição','title');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php
        $i = 0;
	foreach ($tipolicitacoes as $tipolicitacao):
                $class = null;
                if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                }
        ?>                        
        
	<tr<?php echo $class;?>>
		<td><?php echo $tipolicitacao['Tipolicitacao']['title']; ?>&nbsp;</td>
                <td class="actions">
                <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $tipolicitacao['Tipolicitacao']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $tipolicitacao['Tipolicitacao']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $tipolicitacao['Tipolicitacao']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o tipo de licitação %s?', true),$tipolicitacao['Tipolicitacao']['title'])); ?>
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