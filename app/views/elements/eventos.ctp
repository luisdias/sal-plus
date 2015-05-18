<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Eventos relacionados</h4>    
    <?php if (!empty($currentModel['Evento'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">     	
            <tr>
                <th>Data</th>
                <th>Texto</th>
                <th>Tipo</th>
                <th class="actions">Ações</th>  
            </tr>
            </thead>
            <?php foreach ($currentModel['Evento'] as $evento): ?>
                <tr>
                    <td data-title="Data"><?php echo $evento['dt_eve'];?></td>
                    <td data-title="Texto" style="text-align: left;"><?php echo $evento['texto_eve'];?></td>
                    <td data-title="Tipo"><?php echo $tipoeventos[$evento['tipoevento_id']];?></td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link("Consultar", array('controller' => 'eventos', 'action' => 'view', $evento['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Editar", array('controller' => 'eventos', 'action' => 'edit', $evento['id']),array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link("Excluir", array('controller' => 'eventos', 'action' => 'delete', $evento['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $evento['id'])); ?></li>
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
    <?php echo $this->Html->link(__('Novo Evento', true), array('controller' => 'eventos', 'action' => 'add', 'fk'=>$currentModel['Licitacao']['id']),array('class'=>'btn btn-primary'));?> </li>
    </div>        
</div>