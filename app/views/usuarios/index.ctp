<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button')); 
    ?>
    <h1>Usuários</h1>    
</div> 
<div class="select-bar">
<?php
	echo $form->create('Usuario', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass'])
		));
	echo $form->input('name', array('label'=>'Nome','div' => false));
	echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
	echo $form->end();
?> 
</div>
<?php if ( $usuarios != null) { ?>
<div class="table">
    <table class="listing" cellpadding="0" cellspacing="0">
        <tr>            
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('Nome','name');?></th>
            <th><?php echo $this->Paginator->sort('login');?></th>
            <th><?php echo $this->Paginator->sort('perfil');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php
        $i = 0;
	foreach ($usuarios as $usuario):
                $class = null;
                if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                }
        ?>                        
        
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['Usuario']['id']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['name']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['login']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['perfil']; ?>&nbsp;</td>

                <td class="actions">
                <?php echo $this->Html->link($this->Html->image("key.png", array("alt" => "Senha","title" => "Senha")), array('action' => 'senha', $usuario['Usuario']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $usuario['Usuario']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $usuario['Usuario']['id']),array('escape' => false)); ?>
                <?php
                // não permite excluir o utilizador de id = 1
                if ( $usuario['Usuario']['id'] > 1 )
                    echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $usuario['Usuario']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o usuário %s?', true),$usuario['Usuario']['name'])); ?>
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