<div id="center-column">
    <div class="top-bar">
        <?php 
        if ( $this->action == 'index' || $this->action == 'find' )
            echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button')); 
        ?>            <h1><?php __('Tipo de ocorrências');?></h1>    
    </div> 
    <div class="select-bar">
    <?php
            echo $form->create('Tipoocorrencia', array(
                    'url' => array_merge(array('action' => 'find'), $this->params['pass'])
                    ));
                echo $form->input('title', array('label'=>'Descrição','div' => false));
            echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
            echo $form->end();
    ?> 
    </div>
    <?php if ( $tipoocorrencias != null) { ?>        <div class="tipoocorrencias index">                
            <table class="listing" cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo $this->Paginator->sort('Descrição','title');?></th>
                <th class="actions"><?php __('Ações');?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($tipoocorrencias as $tipoocorrencia):
                    $class = null;
                    if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                    }
            ?>
    <tr<?php echo $class;?>>
            <td><?php echo $tipoocorrencia['Tipoocorrencia']['title']; ?>&nbsp;</td>
            <td class="actions">
                    <?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $tipoocorrencia['Tipoocorrencia']['id']),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $tipoocorrencia['Tipoocorrencia']['id']),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $tipoocorrencia['Tipoocorrencia']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o tipo de ocorrência %s?', true), $tipoocorrencia['Tipoocorrencia']['title'])); ?>
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