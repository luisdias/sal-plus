<h3><?php __('Mapa de licitações');?></h3>
<p>Eventos futuros</p>
<?php if (!empty($eventos)) { ?>
    <table class="listing" cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Licitação'); ?></th>
        <th><?php __('Data'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th><?php __('Tipo'); ?></th>
        <th class="actions">Ações</th>
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
            <td class="tbl-col-1"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $evento['Evento']['dias_restantes'])); ?></td>                    
            <td class="tbl-col-2"><?php echo $this->Html->link(
                $evento['Licitacao']['num_edital'],
                array(
                    'controller'=>'licitacoes',
                    'action' => 'view',
                    $evento['Evento']['licitacao_id']
                    )
                );?>
            </td>                

            <td class="tbl-col-3"><?php echo $evento['Evento']['dt_eve'];?></td>
            <td class="tbl-col-4"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $evento['Evento']['dia_da_semana'])); ?></td>
            <td class="tbl-col-5a"><?php echo $evento['Evento']['dias_restantes'];?></td>                        
            <td class="tbl-col-5b"><?php echo $evento['Tipoevento']['title'];?></td>

        <td class="action_col">
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'eventos','action' => 'view', $evento['Evento']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'eventos','action' => 'edit', $evento['Evento']['id'], 'fk'=>$evento['Evento']['licitacao_id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'eventos','action' => 'delete', $evento['Evento']['id'], 'fk'=>$evento['Evento']['licitacao_id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o evento do dia %s da Licitação %s?', true),$evento['Evento']['dt_eve'],$evento['Licitacao']['num_edital'])); ?>
        </td>

        </tr>
    <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p><b><i>Não existem eventos futuros cadastrados</i></b></p>
<?php } ?>