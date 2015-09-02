<div class="top-bar">
    <h4><i class="fa fa-angle-right"></i> Lotes
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo ' da licitação '. $licitacoes[$this->passedArgs['fk']];
    ?>
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'btn btn-primary')); 
    else
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
    ?>
	</h4>
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
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link("Consultar", array('action' => 'view', $lote['Lote']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Editar", array('action' => 'edit', $lote['Lote']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null) ),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Excluir", array('action' => 'delete', $lote['Lote']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o lote # %s?', true),$lote['Lote']['num_lote'])); ?></li>
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