<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Recursos Relacionados</h4>    
    <?php if (!empty($currentModel['Recurso'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">      
            <tr>
                <th>Contrato</th>
                <th>Pessoa</th>
                <th class="actions">Ações</th>
            </tr>
            </thead>
            <?php foreach ($currentModel['Recurso'] as $recurso): ?>
                <tr>
                    <td data-title="Contrato"><?php echo $contratos[$recurso['contrato_id']];?></td>
                    <td data-title="Pessoa"><?php echo $pessoas[$recurso['pessoa_id']];?></td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'recursos', 'action' => 'view', $recurso['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'recursos', 'action' => 'edit', $recurso['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'recursos', 'action' => 'delete', $recurso['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $recurso['id'])); ?>
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
    <?php echo $this->Html->link(__('Novo Recurso', true), array('controller' => 'recursos', 'action' => 'add', 'fk'=>$currentModel['Contrato']['id']),array('class'=>'btn btn-primary'));?> </li>
    </div>
</div>
