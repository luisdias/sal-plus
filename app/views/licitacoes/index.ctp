<div class="top-bar">
    <?php 
    if ( $this->action == 'index' || $this->action == 'find' )
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>   
</div> 
<div class="filter-form">
<?php
	echo $form->create('Licitacao', array(
		'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                'class'=>'form-inline'
		));
        echo "<div class=\"form-group\">";
	echo $form->input('num_edital', array('label'=>'Edital','div' => false,'class'=>'form-control'));
        echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
        echo "</div>";
	echo $form->end();
?> 
</div>
<?php if ( $licitacoes != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Licitações
    </h4>
    <section id="unseen">     
    <table class="table table-bordered table-striped table-advance table-hover">
        <tr>
            <th><?php echo $this->Paginator->sort('Edital','num_edital');?></th>
            <th><?php echo $this->Paginator->sort('Status','status');?></th>
            <th><?php echo $this->Paginator->sort('Abertura','dt_abertura');?></th>
            <th><?php echo $this->Paginator->sort('Modalidade','Modalidade.title');?></th>
            <th><?php echo $this->Paginator->sort('Tipo','Tipolicitacao.title');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php foreach ($licitacoes as $licitacao):?>                        
        <tr>
            <td><?php echo $licitacao['Licitacao']['num_edital']; ?>&nbsp;</td>
            <td><?php echo $licitacao['Licitacao']['status']; ?>&nbsp;</td>
            <td><?php echo $licitacao['Licitacao']['dt_abertura']; ?>&nbsp;</td>
            <td><?php echo $this->Html->link($licitacao['Modalidade']['title'], array('controller' => 'modalidades', 'action' => 'view', $licitacao['Modalidade']['id'])); ?></td>
            <td><?php echo $this->Html->link($licitacao['Tipolicitacao']['title'], array('controller' => 'tipolicitacoes', 'action' => 'view', $licitacao['Tipolicitacao']['id'])); ?></td>

            <td class="actions">
            <?php echo $this->Html->link($this->Html->image("comments.png", array("alt" => "Eventos","title" => "Eventos")), array('controller' => 'eventos', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id'] ),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("chart_organisation.png", array("alt" => "Lotes","title" => "Lotes")), array('controller' => 'lotes', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("award_star_gold_3.png", array("alt" => "Resultados","title" => "Resultados")), array('controller' => 'resultados', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $licitacao['Licitacao']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $licitacao['Licitacao']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $licitacao['Licitacao']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a licitação # %s?', true), $licitacao['Licitacao']['num_edital']) ); ?>
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