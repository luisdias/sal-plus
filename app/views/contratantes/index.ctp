<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>    
</div> 
<div class="filter-form">
<?php
	echo $form->create('Contratante', array(
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
<?php if ( $contratantes != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Contratantes
    </h4>
    <section id="unseen">    
    <table class="table table-bordered table-striped table-advance table-hover">
        <tr>            
            <th style="width:40%;"><?php echo $this->Paginator->sort('Nome','name');?></th>
            <th style="width:40%;"><?php echo $this->Paginator->sort('tipo');?></th>
            <th style="width:10%;"><?php echo $this->Paginator->sort('categoria');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($contratantes as $contratante): ?>        
	<tr>
		<td><?php echo $contratante['Contratante']['name']; ?>&nbsp;</td>
		<td><?php echo $contratante['Contratante']['tipo']; ?>&nbsp;</td>
		<td><?php echo $contratante['Contratante']['categoria']; ?>&nbsp;</td>
                <td class="actions">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link("Consultar", array('action' => 'view', $contratante['Contratante']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Editar",array('action' => 'edit', $contratante['Contratante']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Excluir", array('action' => 'delete', $contratante['Contratante']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o contratante # %s?', true), $contratante['Contratante']['name']) ); ?></li>
                  </ul>
                </div>                     
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