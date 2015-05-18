<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Resultados relacionados</h4>    
    <?php if (!empty($currentModel['Resultado'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
            <tr>
                <th>Razão Social</th>
                <th>Habilitação</th>
                <th>Nota técnica</th>
                <th>Preço</th>
                <th>Desconto</th>
                <th>Nota de preço</th>
                <th>Nota final</th>
                <th>Vencedor</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <?php foreach ($currentModel['Resultado'] as $resultado): ?>
                <tr>
                    <td data-title="Razão Social"><?php echo $empresas[$resultado['empresa_id']];?></td>
                    <td data-title="Habilitação"><?php echo ( $resultado['habilitacao'] == 0 ? 'N' : 'S' );?></td>                       
                    <td data-title="Nota técnica"><span class="floatright"><?php echo $resultado['nota_tecnica'];?></span></td>
                    <td data-title="Preço"><span class="floatright"><?php echo $resultado['preco'];?></span></td>
                    <td data-title="Desconto"><span class="floatright"><?php echo $resultado['desconto'];?></span></td>
                    <td data-title="Nota de preço"><span class="floatright"><?php echo $resultado['nota_de_preco'];?></span></td>
                    <td data-title="Nota final"><span class="floatright"><?php echo $resultado['nota_final'];?></span></td>                        
                    <td data-title="Vencedor"><?php echo ( $resultado['vencedor'] == 0 ? 'N' : 'S' );?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'resultados', 'action' => 'view', $resultado['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'resultados', 'action' => 'edit', $resultado['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'resultados', 'action' => 'delete', $resultado['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $resultado['id'])); ?></li>
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
    <?php echo $this->Html->link(__('Novo Resultado', true), array('controller' => 'resultados', 'action' => 'add', 'fk'=>$currentModel['Licitacao']['id']),array('class'=>'btn btn-primary'));?> </li>
    </div>        
</div>