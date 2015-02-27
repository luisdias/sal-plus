<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>   
</div> 
<div class="filter-form">
<?php
	echo $form->create('Usuario', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                    'class'=>'form-inline'
		));
        echo "<div class=\"form-group\">";
	echo $form->input('name', array('label'=>'Nome','div' => false,'class'=>'form-control'));
	echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
        echo "</div>";
	echo $form->end();
?> 
</div>
<?php if ( $usuarios != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Usuários</h4>
    <section id="unseen">     
        <table class="table table-bordered table-striped table-advance table-hover">        
        <tr>            
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('Nome','name');?></th>
            <th><?php echo $this->Paginator->sort('login');?></th>
            <th><?php echo $this->Paginator->sort('perfil');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>                        
	<tr>
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
    </section>                  
    <?php echo $this->element('paginator'); ?>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->
<?php 
} else {
    echo $this->Html->tag('p','Não existem itens para listar');
} ?>     
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->