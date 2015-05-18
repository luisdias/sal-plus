<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Aditivos Relacionados</h4>
    <?php if (!empty($currentModel['Aditivo'])):?>    
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>Número</th>
                    <th>Contrato</th>
                    <th>Processo</th>
                    <th>Ano</th>
                    <th>Tipo</th>
                    <th>Assinatura</th>
                    <th>Publicação</th>
                    <th>Veiculo Publicação</th>
                    <th>Valor Global</th>
                    <th>Valor Parcela</th>
                    <th>Prazo</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <?php foreach ($currentModel['Aditivo'] as $aditivo): ?>
                <tr>
                    <td data-title="Número"><?php echo $aditivo['numero'];?></td>
                    <td data-title="Contrato"><?php echo $contratos[$aditivo['contrato_id']];?></td>
                    <td data-title="Processo"><?php echo $aditivo['numero_processo'];?></td>
                    <td data-title="Ano"><?php echo $aditivo['ano_processo'];?></td>
                    <td data-title="Tipo"><?php echo $tipoaditivos[$aditivo['tipoaditivo_id']];?></td>
                    <td data-title="Assinatura"><?php echo $aditivo['dt_assinatura'];?></td>
                    <td data-title="Publicação"><?php echo $aditivo['dt_publicacao'];?></td>
                    <td data-title="Veiculo Publicação"><?php echo $aditivo['veiculo_publicacao'];?></td>
                    <td data-title="Valor Global"><?php echo $aditivo['valor_global'];?></td>
                    <td data-title="Valor Parcela"><?php echo $aditivo['valor_parcela'];?></td>
                    <td data-title="Prazo"><?php echo $aditivo['prazo'];?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'aditivos', 'action' => 'view', $aditivo['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'aditivos', 'action' => 'edit', $aditivo['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'aditivos', 'action' => 'delete', $aditivo['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $aditivo['id'])); ?></li>
                          </ul>
                        </div>                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>    
        </section>
    <?php endif; ?>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->
    <div class="related-actions">
    <?php echo $this->Html->link(__('Novo Aditivo', true), array('controller' => 'aditivos', 'action' => 'add', 'fk'=>$currentModel['Contrato']['id']),array('class'=>'btn btn-primary'));?> </li>
    </div>
</div>
