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
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link("Eventos", array('controller' => 'eventos', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id'] ),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Lotes", array('controller' => 'lotes', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Resultados", array('controller' => 'resultados', 'action' => 'index', 'fk' => $licitacao['Licitacao']['id']),array('escape' => false)); ?></li>
                    <li class="divider"></li>
                    <li><?php echo $this->Html->link("Consultar", array('action' => 'view', $licitacao['Licitacao']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Editar",array('action' => 'edit', $licitacao['Licitacao']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Excluir", array('action' => 'delete', $licitacao['Licitacao']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a licitação # %s?', true), $licitacao['Licitacao']['num_edital']) ); ?></li>
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
    echo '<div style="clear:both;" class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem itens para listar</b></div>';
} ?>     
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->