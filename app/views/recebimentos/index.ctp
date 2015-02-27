    <div id="center-column">
        <div class="top-bar">
            <?php 
            if ( $this->action == 'index' || $this->action == 'find' )
                echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)), array('class'=>'btn btn-primary')); 
            ?>            

        </div> 
        <div class="filter-form">
        <?php
            if ( !isset($this->passedArgs['fk']) ) {
                echo $form->create('Recebimento', array(
                        'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                        'class'=>'form-inline'
                        ));
                echo "<div class=\"form-group\">";
                echo $form->input('contrato_id', array('label'=>'Contrato','div' => false,'empty'=>'-- Todos --','class'=>'form-control'));
                echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
                echo "</div>";
                echo $form->end();
            }
        ?>  
        </div>
        <?php if ( $recebimentos != null) { ?>        
        <div class="recebimentos index">                
            <div class="row mt">
            <div class="col-lg-12">
            <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Recebimentos
            <?php 
            if ( isset($this->passedArgs['fk']) )
                echo ' do contrato ' . $contratos[$this->passedArgs['fk']];
            ?>            
            </h4>
            <section id="unseen">     
            <table class="table table-bordered table-striped table-advance table-hover">
                <tr>
                    <th><?php echo $this->Paginator->sort('Contrato','Contrato.numero');?></th>
                    <th><?php echo $this->Paginator->sort('Emissão','dt_emissao');?></th>
                    <th><?php echo $this->Paginator->sort('Vencto','dt_vencto');?></th>
                    <th><?php echo $this->Paginator->sort('Pagto','dt_pagto');?></th>
                    <th><?php echo $this->Paginator->sort('Núm.Doc.','numero_documento');?></th>
                    <th><?php echo $this->Paginator->sort('Parcela','valor_parcela');?></th>
                    <th><?php echo $this->Paginator->sort('Pago','valor_pago');?></th>
                    <th class="actions"><?php __('Ações');?></th>
                </tr>
                <?php foreach ($recebimentos as $recebimento): ?>
                <tr>
		<td>
			<?php echo $this->Html->link($recebimento['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recebimento['Contrato']['id'])); ?>
		</td>
		<td><?php echo $recebimento['Recebimento']['dt_emissao']; ?>&nbsp;</td>
		<td><?php echo $recebimento['Recebimento']['dt_vencto']; ?>&nbsp;</td>
		<td><?php echo $recebimento['Recebimento']['dt_pagto']; ?>&nbsp;</td>
		<td><?php echo $recebimento['Recebimento']['numero_documento']; ?>&nbsp;</td>
		<td><span class="floatright"><?php echo $this->Number->format($recebimento['Recebimento']['valor_parcela'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => ',',
                    'thousands' => '.')
                ); ?></span>&nbsp;</td>
		<td><span class="floatright"><?php echo $this->Number->format($recebimento['Recebimento']['valor_pago'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => ',',
                    'thousands' => '.')
                ); ?></span>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $recebimento['Recebimento']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $recebimento['Recebimento']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null) ),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $recebimento['Recebimento']['id'],'fk'=> ( isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o recebimento # %s?', true), $recebimento['Recebimento']['numero_documento'])); ?>
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
            echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
        } ?>                           
    </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->