<div id="center-column">
<div class="top-bar">
    <?php 
    echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)), array('class'=>'button')); 
    ?>
    <h1>Eventos
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo ' da licitação '. $licitacoes[$this->passedArgs['fk']];
    ?>
    </h1>    
</div> 
<div class="select-bar">
<?php
    if ( !isset($this->passedArgs['fk']) ) {
        echo $form->create('Evento', array(
                'url' => array_merge(array('action' => 'find'), $this->params['pass'])
                ));
        echo $form->input('licitacao_id', array('label'=>'Licitação','div' => true,'empty'=>'-- Todos --'));
        echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
        echo $form->end();
    }
?>     
</div>
<?php if ( $eventos != null) { ?>
<div class="table">
    <table class="listing" cellpadding="0" cellspacing="0">
        <tr>
            <?php if ( !isset($this->passedArgs['fk']) ) { ?>
            <th><?php echo $this->Paginator->sort('Licitação','Licitacao.num_edital');?></th>
            <?php } ?>
            <th><?php echo $this->Paginator->sort('Data','dt_eve');?></th>
            <th><?php echo $this->Paginator->sort('Texto','texto_eve');?></th>
            <th><?php echo $this->Paginator->sort('Tipo','Tipoevento.title');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>

        <?php            
        $i = 0;
	foreach ($eventos as $evento):
                $class = null;
                if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                }
        ?>                        
        
	<tr<?php echo $class;?>>
                <?php if ( !isset($this->passedArgs['fk']) ) { ?>
                <td><?php echo $evento['Licitacao']['num_edital']; ?>&nbsp;</td>
                <?php } ?>
		<td><?php echo $evento['Evento']['dt_eve']; ?>&nbsp;</td>
                <td><?php echo $evento['Evento']['texto_eve']; ?>&nbsp;</td>                
		<td><?php echo $evento['Tipoevento']['title']; ?>&nbsp;</td>
                <td class="actions">
                <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'eventos','action' => 'view', $evento['Evento']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'eventos','action' => 'edit', $evento['Evento']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'eventos','action' => 'delete', $evento['Evento']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o evento do dia %s?', true),$evento['Evento']['dt_eve'])); ?>
                </td>
	</tr>        
        <?php endforeach; ?>
    </table>
    <?php echo $this->element('paginator'); ?>
<?php 
} else {
    echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
} ?>    
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->