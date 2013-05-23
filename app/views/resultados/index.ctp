<div id="center-column">
<div class="top-bar">
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo $this->Html->link(__('Novo', true), array('action' => 'add', 'fk'=>$this->passedArgs['fk']), array('class'=>'button')); 
    else
        echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'button')); 
    ?>
    <h1>Resultados
    <?php 
    if ( isset($this->passedArgs['fk']) )
        echo ' da licitação '. $licitacoes[$this->passedArgs['fk']];
    ?>
    </h1>    
</div> 
<div class="select-bar">
<?php
    if ( !isset($this->passedArgs['fk']) ) {
        echo $form->create('Resultado', array(
                'url' => array_merge(array('action' => 'find'), $this->params['pass'])
                ));
        echo $form->input('licitacao_id', array('label'=>'Licitação','div' => true,'empty'=>'-- Todos --'));
        echo $form->submit('zoom.png', array('div' => false, 'alt'=>'pesquisar', 'title'=>'pesquisar'));
        echo $form->end();        
    }
?>      
</div>
<?php if ( $resultados != null) { ?>
<div class="table">
    <table class="listing" cellpadding="0" cellspacing="0">
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

        <?php
        $i = 0;
	foreach ($resultados as $resultado):
                $class = null;
                if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                }
        ?>                        
        
	<tr<?php echo $class;?>>
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
                <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('action' => 'view', $resultado['Resultado']['id']),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('action' => 'edit', $resultado['Resultado']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('action' => 'delete', $resultado['Resultado']['id'],'fk'=>(isset($this->passedArgs['fk']) ? $this->passedArgs['fk'] : null)),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o resultado da licitação # %s empresa %s?', true),$resultado['Licitacao']['num_edital'],$resultado['Empresa']['name'])); ?>
                </td>
	</tr>        
        <?php endforeach; ?>
    </table>
    <?php echo $this->element('Paginator'); ?>
<?php 
} else {
    echo $this->Html->tag('span','Não existem itens para listar',array('class'=>'info-msg','div'=>'false'));
} ?>     
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->