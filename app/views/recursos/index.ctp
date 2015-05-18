<div id="center-column">
    <div class="top-bar">
        <?php 
        if ( isset($this->passedArgs['fk']) ) {
            echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'btn btn-primary'));
        } else {
            echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary'));
        }
        ?>             
    </div> 
    <div class="filter-form">
    <?php
        if ( !isset($this->passedArgs['fk']) ) {
            echo $form->create('Recurso', array(
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
    <?php if ( $recursos != null) { ?>        
    <div class="recursos index">                
        <div class="row mt">
        <div class="col-lg-12">
        <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Recursos
        <?php 
        if ( isset($this->passedArgs['fk']) )
            echo ' do contrato ' . $contratos[$this->passedArgs['fk']];
        ?>            
        </h4>
        <section id="unseen">     
        <table class="table table-bordered table-striped table-advance table-hover">
            <tr>
                <th><?php echo $this->Paginator->sort('Contrato','Contrato.numero');?></th>
                <th><?php echo $this->Paginator->sort('Pessoa','Pessoa.nome');?></th>
                <th class="actions"><?php __('Ações');?></th>
            </tr>
            <?php foreach ($recursos as $recurso): ?>
            <tr>
                <td>
                    <?php echo $this->Html->link($recurso['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recurso['Contrato']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($recurso['Pessoa']['nome'], array('controller' => 'pessoas', 'action' => 'view', $recurso['Pessoa']['id'])); ?>
                </td>
                <td class="actions">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Selecione <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><?php echo $this->Html->link('Consultar', array('action' => 'view', $recurso['Recurso']['id']),array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('Editar', array('action' => 'edit', $recurso['Recurso']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?></li>
                        <li><?php echo $this->Html->link('Excluir', array('action' => 'delete', $recurso['Recurso']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o recurso %s do contrato # %s?', true), $recurso['Pessoa']['nome'],$recurso['Contrato']['numero'])); ?></li>                          
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
        </div>                
        <?php 
        } else {
            echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
        } ?>                           
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->