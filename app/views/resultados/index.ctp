<div id="center-column">
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
        echo $form->create('Resultado', array(
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
<?php if ( $resultados != null) { ?>
<div class="table">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Resultados
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
            <th><?php echo $this->Paginator->sort('Empresa','Empresa.name');?></th>
            <th><?php echo $this->Paginator->sort('Habilitação','habilitacao'); ?></th>
            <th><?php echo $this->Paginator->sort('Nota técnica', 'nota_tecnica');?></th>
            <th><?php echo $this->Paginator->sort('Nota de preço', 'nota_de_preco');?></th>
            <th><?php echo $this->Paginator->sort('Nota final', 'nota_final');?></th>
            <th><?php echo $this->Paginator->sort('vencedor'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php foreach ($resultados as $resultado): ?>                        
	<tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <td><?php echo $resultado['Licitacao']['num_edital']; ?>&nbsp;</td>
            <?php } ?>            
            <td>
                    <?php echo $this->Html->link($resultado['Empresa']['name'], array('controller' => 'empresas', 'action' => 'view', $resultado['Empresa']['id'])); ?>
            </td>
            <td style="width: 50px;"><?php echo ( $resultado['Resultado']['habilitacao'] == 0 ? 'N' : 'S' );?></td>     
            <td style="width: 50px;"><?php echo $resultado['Resultado']['nota_tecnica']; ?>&nbsp;</td>
            <td style="width: 50px;"><?php echo $resultado['Resultado']['nota_de_preco']; ?>&nbsp;</td>
            <td style="width: 50px;"><?php echo $resultado['Resultado']['nota_final']; ?>&nbsp;</td>
            <td style="width: 50px;"><?php echo ( $resultado['Resultado']['vencedor'] == 0 ? 'N' : 'S' );?></td>    
            <td class="actions">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Selecione <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><?php echo $this->Html->link("Consultar", array('action' => 'view', $resultado['Resultado']['id']),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Editar", array('action' => 'edit', $resultado['Resultado']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?></li>
                    <li><?php echo $this->Html->link("Excluir", array('action' => 'delete', $resultado['Resultado']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o resultado da licitação # %s empresa %s?', true),$resultado['Licitacao']['num_edital'],$resultado['Empresa']['name'])); ?></li>                      
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
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->