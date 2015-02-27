    <div id="center-column">
        <div class="top-bar">
            <?php 
            if ( $this->action == 'index' || $this->action == 'find' )
                echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
            ?>            
            
        </div> 
        <div class="filter-form">
        <?php
                echo $form->create('Garantia', array(
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
        <?php if ( $garantias != null) { ?>        
        <div class="garantias index">                
            <div class="row mt">
            <div class="col-lg-12">
            <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Garantias       
            </h4>
            <section id="unseen">     
            <table class="table table-bordered table-striped table-advance table-hover">
                <tr>
                    <th><?php echo $this->Paginator->sort('Descrição','title');?></th>
                    <th class="actions"><?php __('Ações');?></th>
                </tr>
                <?php foreach ($garantias as $garantia): ?>
                <tr>
                    <td><?php echo $garantia['Garantia']['title']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $garantia['Garantia']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $garantia['Garantia']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $garantia['Garantia']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a garantia %s?', true), $garantia['Garantia']['title'])); ?>
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