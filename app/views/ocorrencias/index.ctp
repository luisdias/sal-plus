<div id="center-column">
    <div class="top-bar">
        <?php 
        if ( isset($this->passedArgs['fk']) ) {
            echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'button'));
        } else {
            echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button'));
        }
        ?>           
        <h1><?php __('Ocorrências');?>
        <?php 
        if ( isset($this->passedArgs['fk']) )
            echo ' do contrato ' . $contratos[$this->passedArgs['fk']];
        ?>
        </h1>
    </div> 
    <div class="select-bar">
    <?php
        if ( !isset($this->passedArgs['fk']) ) {
            echo $form->create('Ocorrencia', array(
                    'url' => array_merge(array('action' => 'find'), $this->params['pass'])
                    ));
            echo $form->input('contrato_id', array('label'=>'Contrato','div' => true,'empty'=>'-- Todos --'));
            echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
            echo $form->end();
        }
    ?>   
    </div>
    <?php if ( $ocorrencias != null) { ?>        <div class="ocorrencias index">                
            <table class="listing" cellpadding="0" cellspacing="0">
            <tr>
                <?php if ( !isset($this->passedArgs['fk']) ) { ?>
                <th><?php echo $this->Paginator->sort('Contrato','Contrato.numero');?></th>
                <?php } ?>                 
                <th><?php echo $this->Paginator->sort('Data','dt_ocorrencia');?></th>
                <th><?php echo $this->Paginator->sort('Tipo','Tipoocorrencia.title');?></th>
                <th class="actions"><?php __('Ações');?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($ocorrencias as $ocorrencia):
                    $class = null;
                    if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                    }
            ?>
    <tr<?php echo $class;?>>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <td>
                <?php echo $this->Html->link($ocorrencia['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $ocorrencia['Contrato']['id'])); ?>
            </td>
            <?php } ?>        
            <td><?php echo $ocorrencia['Ocorrencia']['dt_ocorrencia']; ?>&nbsp;</td>
            <td>
                    <?php echo $this->Html->link($ocorrencia['Tipoocorrencia']['title'], array('controller' => 'tipoocorrencias', 'action' => 'view', $ocorrencia['Tipoocorrencia']['id'])); ?>
            </td>
            <td class="actions">
                    <?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $ocorrencia['Ocorrencia']['id']),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $ocorrencia['Ocorrencia']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $ocorrencia['Ocorrencia']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a ocorrência da data %s?', true), $ocorrencia['Ocorrencia']['dt_ocorrencia'])); ?>
            </td>
    </tr>
<?php endforeach; ?>
            </table>
        <?php echo $this->element('paginator'); ?>        
        </div>                
        <?php 
        } else {
            echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
        } ?>                           
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->