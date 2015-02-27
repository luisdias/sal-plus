<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Empresas e Resultados relacionados</h4>    
    <?php if (!empty($currentModel['Empresa'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">    
            <tr>
                    <th>Razão Social</th>
                    <th>Nome</th>
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
            <?php foreach ($currentModel['Empresa'] as $empresa): ?>
                <tr>
                    <td data-title="Razão Social"><?php echo $empresa['razao_social'];?></td>
                    <td data-title="Nome"><?php echo $empresa['name'];?></td>
                    <td data-title="Habilitação"><?php echo ( $empresa['Resultado']['habilitacao'] == 0 ? 'N' : 'S' );?></td>                       
                    <td data-title="Nota técnica"><span class="floatright"><?php echo $empresa['Resultado']['nota_tecnica'];?></span></td>
                    <td data-title="Preço"><span class="floatright"><?php echo $empresa['Resultado']['preco'];?></span></td>
                    <td data-title="Desconto"><span class="floatright"><?php echo $empresa['Resultado']['desconto'];?></span></td>
                    <td data-title="Nota de preço"><span class="floatright"><?php echo $empresa['Resultado']['nota_de_preco'];?></span></td>
                    <td data-title="Nota final"><span class="floatright"><?php echo $empresa['Resultado']['nota_final'];?></span></td>                        
                    <td data-title="Vencedor"><?php echo ( $empresa['Resultado']['vencedor'] == 0 ? 'N' : 'S' );?></td>
                    <td class="actions">
                            <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'resultados', 'action' => 'view', $empresa['Resultado']['id']),array('escape' => false)); ?>
                            <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'resultados', 'action' => 'edit', $empresa['Resultado']['id']),array('escape' => false)); ?>
                            <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'resultados', 'action' => 'delete', $empresa['Resultado']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $empresa['Resultado']['id'])); ?>
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
    <?php echo $this->Html->link(__('Novo Resultado', true), array('controller' => 'resultados', 'action' => 'add'),array('class'=>'btn btn-primary'));?> </li>
    </div>        
</div>