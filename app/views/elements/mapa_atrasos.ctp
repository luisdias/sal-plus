<p>Contas em atraso</p>
<?php if (!empty($contas_em_atraso)) { ?>
    <table class="listing" cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Contrato'); ?></th>                
        <th><?php __('Vencto'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th class="actions">Ações</th>
    </tr>
    <?php
    $i = 0;
    foreach ($contas_em_atraso as $item):
        $class = null;
        if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td class="tbl-col-1"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $item['Recebimento']['dias_restantes'])); ?></td>              
        <td class="tbl-col-2"><?php echo $this->Html->link(
            $item['Contrato']['numero'],
            array(
                'controller'=>'contratos',
                'action' => 'view',
                $item['Recebimento']['contrato_id']
                )
            );?>
        </td>                
        <td class="tbl-col-3"><?php echo $item['Recebimento']['dt_vencto'];?></td>
        <td class="tbl-col-4"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $item['Recebimento']['dia_da_semana'])); ?></td>
        <td class="tbl-col-5"><?php echo $item['Recebimento']['dias_restantes'];?></td>                        

    <td class="action_col">
        <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'recebimentos','action' => 'view', $item['Recebimento']['id']),array('escape' => false)); ?>
        <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'recebimentos','action' => 'edit', $item['Recebimento']['id'], 'fk'=>$item['Recebimento']['contrato_id']),array('escape' => false)); ?>
        <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'recebimentos','action' => 'delete', $item['Recebimento']['id'], 'fk'=>$item['Recebimento']['contrato_id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a conta de %s? do Contrato %s', true),$item['Recebimento']['dt_vencto'],$item['Contrato']['numero'])); ?>
    </td>

    </tr>
    <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p><b><i>Não existem contas em atraso</i></b></p>
<?php } ?>