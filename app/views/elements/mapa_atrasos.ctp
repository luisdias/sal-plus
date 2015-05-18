<?php if (!empty($contas_em_atraso)) { ?>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i>Contas em atraso</h4>
    <section id="no-more-tables">
    <table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Contrato'); ?></th>                
        <th><?php __('Vencto'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th class="actions">Ações</th>
    </tr>
    </thead>
    <?php foreach ($contas_em_atraso as $item): ?>
    <tr>
        <td data-title="Alerta"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $item['Recebimento']['dias_restantes'])); ?></td>              
        <td data-title="Contrato"><?php echo $this->Html->link(
            $item['Contrato']['numero'],
            array(
                'controller'=>'contratos',
                'action' => 'view',
                $item['Recebimento']['contrato_id']
                )
            );?>
        </td>                
        <td data-title="Vencto"><?php echo $item['Recebimento']['dt_vencto'];?></td>
        <td data-title="Dia da semana"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $item['Recebimento']['dia_da_semana'])); ?></td>
        <td data-title="Dias restantes"><?php echo $item['Recebimento']['dias_restantes'];?></td>                        

    <td data-title="Ações">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Selecione <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link("Consultar", array('controller' => 'recebimentos','action' => 'view', $item['Recebimento']['id']),array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link("Editar", array('controller' => 'recebimentos','action' => 'edit', $item['Recebimento']['id'], 'fk'=>$item['Recebimento']['contrato_id']),array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link("Excluir", array('controller' => 'recebimentos','action' => 'delete', $item['Recebimento']['id'], 'fk'=>$item['Recebimento']['contrato_id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir a conta de %s? do Contrato %s', true),$item['Recebimento']['dt_vencto'],$item['Contrato']['numero'])); ?></li>              
          </ul>
        </div>        
    </td>

    </tr>
    <?php endforeach; ?>
    </table>
    </section>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->             
<?php } else { ?>
    <div class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem contas em atraso</b></div>
<?php } ?>