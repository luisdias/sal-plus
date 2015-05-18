<br>
<?php if (!empty($contratos)) { ?>
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i>Mapa de vigência dos contratos</h4>
    <section id="no-more-tables">
    <table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
        <th><?php __('Alerta'); ?></th>
        <th><?php __('Contrato'); ?></th>        
        <th><?php __('Conclusão'); ?></th>
        <th><?php __('Dia da semana'); ?></th>
        <th><?php __('Dias'); ?></th>
        <th class="actions">Ações</th>
    </tr>
    </thead>
    <?php
    $i = 0;
    foreach ($contratos as $contrato):
        $class = null;
        if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td data-title="Alerta"><?php echo $this->element('bandeira_alerta',array('dias_restantes' => $contrato['Contrato']['dias_restantes'])); ?></td>
        <td data-title="Contrato"><?php echo $this->Html->link(
                $contrato['Contrato']['numero'],
                array(
                    'controller'=>'contratos',
                    'action' => 'view',
                    $contrato['Contrato']['id']
                    )
                );?></td>
        <td data-title="Conclusão"><?php echo $contrato['Contrato']['dt_conclusao'];?></td>
        <td data-title="Dia da semana"><?php echo $this->element('dia_da_semana',array('int_dia_da_semana' => $contrato['Contrato']['dia_da_semana'])); ?></td>
        <td data-title="Dias"><?php echo $contrato['Contrato']['dias_restantes'];?></td>                        

        <td class="action_col">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Selecione <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link("Consultar", array('controller' => 'contratos','action' => 'view', $contrato['Contrato']['id']),array('escape' => false)); ?></li>
                <li><?php echo $this->Html->link("Editar", array('controller' => 'contratos','action' => 'edit', $contrato['Contrato']['id']),array('escape' => false)); ?></li>
                <li><?php echo $this->Html->link("Excluir", array('controller' => 'contratos','action' => 'delete', $contrato['Contrato']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o contrato # %s?', true),$contrato['Contrato']['numero'])); ?></li>
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
    <div class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem contratos próximos da data conclusão</b></div>
<?php } ?>
