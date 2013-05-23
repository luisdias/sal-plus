<div id="center-column">
    <div class="top-bar">
        <?php 
        if ( isset($this->passedArgs['fk']) ) {
            echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'button'));
        } else {
            echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button'));
        }
        ?>             
        <h1><?php __('Recursos');?>
        <?php 
        if ( isset($this->passedArgs['fk']) )
            echo ' do contrato ' . $contratos[$this->passedArgs['fk']];
        ?>
        </h1>
    </div> 
    <div class="select-bar">
    <?php
        if ( !isset($this->passedArgs['fk']) ) {
            echo $form->create('Recurso', array(
                    'url' => array_merge(array('action' => 'find'), $this->params['pass'])
                    ));
            echo $form->input('contrato_id', array('label'=>'Contrato','div' => true,'empty'=>'-- Todos --'));
            echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
            echo $form->end();
        }
    ?>   
    </div>
    <?php if ( $recursos != null) { ?>        <div class="recursos index">                
            <table class="listing" cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo $this->Paginator->sort('Contrato','Contrato.numero');?></th>
                <th><?php echo $this->Paginator->sort('Pessoa','Pessoa.nome');?></th>
                <th class="actions"><?php __('Ações');?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($recursos as $recurso):
                    $class = null;
                    if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                    }
            ?>
    <tr<?php echo $class;?>>
            <td>
                    <?php echo $this->Html->link($recurso['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recurso['Contrato']['id'])); ?>
            </td>
            <td>
                    <?php echo $this->Html->link($recurso['Pessoa']['nome'], array('controller' => 'pessoas', 'action' => 'view', $recurso['Pessoa']['id'])); ?>
            </td>
            <td class="actions">
                    <?php echo $this->Html->link($this->Html->image('page-find.gif', array('alt' => 'Consultar','title' => 'Consultar')), array('action' => 'view', $recurso['Recurso']['id']),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('edit-icon.gif', array('alt' => 'Editar','title' => 'Editar')), array('action' => 'edit', $recurso['Recurso']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?>
                    <?php echo $this->Html->link($this->Html->image('hr.gif', array('alt' => 'Excluir','title' => 'Excluir')), array('action' => 'delete', $recurso['Recurso']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o recurso %s do contrato # %s?', true), $recurso['Pessoa']['nome'],$recurso['Contrato']['numero'])); ?>
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