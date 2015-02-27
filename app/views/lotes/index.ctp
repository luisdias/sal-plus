<div class="top-bar">
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'btn btn-primary')); 
    else
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>
</div> 
<div class="filter-form">
<?php
    if ( !isset($this->passedArgs['fk']) ) {
        echo $form->create('Lote', array(
                'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                    'class'=>'form-inline'
                ));
        echo "<div class=\"form-group\">";        
        echo $form->input('licitacao_id', array('label'=>'Licitação','div' => false,'empty'=>'-- Todos --','class'=>'form-control'));
        echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
        echo "</div>"; 
        echo $form->end();               
    }
?>      
</div>
<?php if ( $lotes != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Lotes
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo ' da licitação '. $licitacoes[$this->passedArgs['fk']];
    ?></h4>
    <section id="unseen">     
        <table class="table table-bordered table-striped table-advance table-hover"> 
        <tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <th><?php echo $this->Paginator->sort('Licitação','Licitacao.num_edital');?></th>
            <?php } ?>            
            <th><?php echo $this->Paginator->sort('Número','num_lote');?></th>
            <th><?php echo $this->Paginator->sort('Valor','vlr_lote');?></th>
            <th><?php echo $this->Paginator->sort('Prazo','prazo_lote');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php foreach ($lotes as $lote): ?>                        
	<tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <td><?php echo $lote['Licitacao']['num_edital']; ?>&nbsp;</td>
            <?php } ?>            
            <td><?php echo $lote['Lote']['num_lote']; ?>&nbsp;</td>
            <td><span class="floatright"><?php echo $this->Number->format($lote['Lote']['vlr_lote'],array(
                'places' => 2,
                'before' => '',
                'escape' => false,
                'decimals' => ',',
                'thousands' => '.')
            ); ?></span>&nbsp;</td>
            <td><span class="floatright"><?php echo $lote['Lote']['prazo_lote']; ?></span>&nbsp;</td>
            <td class="actions">
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $lote['Lote']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $lote['Lote']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null) ),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $lote['Lote']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o lote # %s?', true),$lote['Lote']['num_lote'])); ?>
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
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->