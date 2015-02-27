<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>
</div> 
<div class="filter-form">
<?php
	echo $form->create('Empresa', array(
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
<?php if ( $empresas != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Empresas
    </h4>
    <section id="unseen">     
    <table class="table table-bordered table-striped table-advance table-hover">
        <tr>
            <th style="width:40%;"><?php echo $this->Paginator->sort('Razão Social','razao_social');?></th>
            <th style="width:40%;"><?php echo $this->Paginator->sort('Nome','name');?></th>         
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($empresas as $empresa): ?>                        
	<tr>
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
    </section>                  
    <?php echo $this->element('paginator'); ?>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->                 
    </div> 
<?php 
} else {
    echo $this->Html->tag('p','Não existem itens para listar');
} ?>       
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->