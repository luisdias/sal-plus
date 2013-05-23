<h3><?php __('Mapa de vigência dos contratos');?></h3>
<p>Conclusão dos contratos</p>
<?php if (!empty($contratos)) { ?>
    <table class="listing" cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Contrato'); ?></th>        
        <th><?php __('Conclusão'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th class="actions">Ações</th>
    </tr>
    <?php
    $i = 0;
    foreach ($contratos as $contrato):
        $class = null;
        if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td class="tbl-col-1"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $contrato['Contrato']['dias_restantes'])); ?></td>
        <td class="tbl-col-2"><?php echo $this->Html->link(
                $contrato['Contrato']['numero'],
                array(
                    'controller'=>'contratos',
                    'action' => 'view',
                    $contrato['Contrato']['id']
                    )
                );?></td>
        <td class="tbl-col-3"><?php echo $contrato['Contrato']['dt_conclusao'];?></td>
        <td class="tbl-col-4"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $contrato['Contrato']['dia_da_semana'])); ?></td>
        <td class="tbl-col-5"><?php echo $contrato['Contrato']['dias_restantes'];?></td>                        

        <td class="action_col">
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'contratos','action' => 'view', $contrato['Contrato']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'contratos','action' => 'edit', $contrato['Contrato']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'contratos','action' => 'delete', $contrato['Contrato']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o contrato # %s?', true),$contrato['Contrato']['numero'])); ?>
        </td>

    </tr>
    <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p><b><i>Não existem contratos próximos da data conclusão</i></b></p>
<?php } ?>
