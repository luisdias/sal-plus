<div id="center-column">
<div class="top-bar">
    <?php 
    echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)), array('class'=>'btn btn-primary')); 
    ?>
</div> 
<div class="filter-form">
<?php
    if ( !isset($this->passedArgs['fk']) ) {
        echo $form->create('Evento', array(
                'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                'class'=>'form-inline'
                ));
        echo "<div class=\"form-group\">";
        echo $form->input('licitacao_id', array('label'=>'Licitação','div'=>false, 'empty'=>'-- Todos --','class'=>'form-control'));
        echo $form->submit('Filtrar', array('div'=>false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
        echo "</div>";
        echo $form->end();
    }
?>     
</div>
<?php if ( $eventos != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Eventos
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo ' da licitação '. $licitacoes[$this->passedArgs['fk']];
    ?>        
    </h4>
    <section id="unseen">     
    <table class="table table-bordered table-striped table-advance table-hover">
        <tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <th><?php echo $this->Paginator->sort('Licitação','Licitacao.num_edital');?></th>
            <?php } ?>
            <th><?php echo $this->Paginator->sort('Data','dt_eve');?></th>
            <th><?php echo $this->Paginator->sort('Texto','texto_eve');?></th>
            <th><?php echo $this->Paginator->sort('Tipo','Tipoevento.title');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($eventos as $evento): ?>                        
	<tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <td><?php echo $evento['Licitacao']['num_edital']; ?>&nbsp;</td>
            <?php } ?>
            <td><?php echo $evento['Evento']['dt_eve']; ?>&nbsp;</td>
            <td><?php echo $evento['Evento']['texto_eve']; ?>&nbsp;</td>                
            <td><?php echo $evento['Tipoevento']['title']; ?>&nbsp;</td>
            <td class="actions">
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'eventos','action' => 'view', $evento['Evento']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'eventos','action' => 'edit', $evento['Evento']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'eventos','action' => 'delete', $evento['Evento']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o evento do dia %s?', true),$evento['Evento']['dt_eve'])); ?>
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
    echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
} ?>    
</div>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->