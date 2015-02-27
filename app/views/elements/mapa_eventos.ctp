<h3><i class="fa fa-angle-right"></i>Mapa de licitações</h3>
<?php if (!empty($eventos)) { ?>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i>Eventos futuros</h4>
    <section id="no-more-tables">
    <table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Licitação'); ?></th>
        <th><?php __('Data'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th><?php __('Tipo'); ?></th>
        <th class="actions">Ações</th>
    </tr>
    </thead>    
    <?php
    $i = 0;
    foreach ($eventos as $evento):
        $class = null;
        if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
        }
    ?>
        <tr<?php echo $class;?>>
            <td data-title="Alerta"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $evento['Evento']['dias_restantes'])); ?></td>                    
            <td data-title="Licitação"><?php echo $this->Html->link(
                $evento['Licitacao']['num_edital'],
                array(
                    'controller'=>'licitacoes',
                    'action' => 'view',
                    $evento['Evento']['licitacao_id']
                    )
                );?>
            </td>                

            <td data-title="Data"><?php echo $evento['Evento']['dt_eve'];?></td>
            <td data-title="Dia da semana"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $evento['Evento']['dia_da_semana'])); ?></td>
            <td data-title="Dias"><?php echo $evento['Evento']['dias_restantes'];?></td>                        
            <td data-title="Tipo"><?php echo $evento['Tipoevento']['title'];?></td>

        <td class="action_col">
            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'eventos','action' => 'view', $evento['Evento']['id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'eventos','action' => 'edit', $evento['Evento']['id'], 'fk'=>$evento['Evento']['licitacao_id']),array('escape' => false)); ?>
            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'eventos','action' => 'delete', $evento['Evento']['id'], 'fk'=>$evento['Evento']['licitacao_id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o evento do dia %s da Licitação %s?', true),$evento['Evento']['dt_eve'],$evento['Licitacao']['num_edital'])); ?>
        </td>

        </tr>
    <?php endforeach; ?>
    </table>
    </section>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row --> 
<?php } else { ?>
    <div class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem eventos futuros cadastrados</b></div>
<?php } ?>