    <div id="center-column">
        <div class="top-bar">
            <?php 
            if ( $this->action == 'index' || $this->action == 'find' )
                echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
            ?> 
        </div> 
        <div class="filter-form">
        <?php
                echo $form->create('Pessoa', array(
                        'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                        'class'=>'form-inline'
                        ));
                echo "<div class=\"form-group\">"; 
                echo $form->input('nome', array('label'=>'Nome','div' => false,'class'=>'form-control'));
                echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
                echo "</div>";
                echo $form->end();
        ?> 
        </div>
        <?php if ( $pessoas != null) { ?>        
        <div class="pessoas index">                
        <div class="row mt">
        <div class="col-lg-12">
        <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Pessoas</h4>
        <section id="unseen">     
            <table class="table table-bordered table-striped table-advance table-hover"> 
                <tr>
                    <th><?php echo $this->Paginator->sort('nome');?></th>
                    <th><?php echo $this->Paginator->sort('email');?></th>
                    <th><?php echo $this->Paginator->sort('telefone');?></th>
                    <th><?php echo $this->Paginator->sort('celular');?></th>
                    <th><?php echo $this->Paginator->sort('fax');?></th>
                    <th><?php echo $this->Paginator->sort('papel');?></th>
                    <th class="actions"><?php __('Ações');?></th>
                </tr>
                <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?php echo $pessoa['Pessoa']['nome']; ?>&nbsp;</td>
                    <td><?php echo $pessoa['Pessoa']['email']; ?>&nbsp;</td>
                    <td><?php echo $pessoa['Pessoa']['telefone']; ?>&nbsp;</td>
                    <td><?php echo $pessoa['Pessoa']['celular']; ?>&nbsp;</td>
                    <td><?php echo $pessoa['Pessoa']['fax']; ?>&nbsp;</td>
                    <td><?php echo $pessoa['Pessoa']['papel']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $pessoa['Pessoa']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $pessoa['Pessoa']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $pessoa['Pessoa']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a pessoa %s?', true), $pessoa['Pessoa']['nome'])); ?>
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