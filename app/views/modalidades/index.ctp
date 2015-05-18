<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>    
</div> 
<div class="filter-form">
<?php
	echo $form->create('Modalidade', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                'class'=>'form-inline'
		));
        echo "<div class=\"form-group\">";
	echo $form->input('title', array('label'=>'Descrição','div' => false,'class'=>'form-control'));
        echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
        echo "</div>";
	echo $form->end();
?> 
</div>
<?php if ( $modalidades != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Modalidades      
    </h4>
    <section id="unseen">     
    <table class="table table-bordered table-striped table-advance table-hover">
        <tr>
            <th><?php echo $this->Paginator->sort('Descrição','title');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($modalidades as $modalidade): ?>
	<tr>
            <td><?php echo $modalidade['Modalidade']['title']; ?>&nbsp;</td>
            <td class="actions">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                      <li><?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $modalidade['Modalidade']['id']),array('escape' => false)); ?></li>
                      <li><?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $modalidade['Modalidade']['id']),array('escape' => false)); ?></li>
                      <li><?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $modalidade['Modalidade']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a modalidade %s?', true),$modalidade['Modalidade']['title'])); ?></li>
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