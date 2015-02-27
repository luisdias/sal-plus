<div class="related">
    <div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
    <h4><i class="fa fa-angle-right"></i> Lotes relacionados</h4>    
    <?php if (!empty($currentModel['Lote'])):?>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
            <tr>
                    <th>Número</th>
                    <th>Prazo</th>
                    <th>Valor</th>
                    <th class="actions">Ações</th>                
            </tr>
            </thead>
            <?php 
                $vlr_lote_total = 0;
                foreach ($currentModel['Lote'] as $lote):
                $vlr_lote_total += $lote['vlr_lote'];
            ?>
                <tr>
                    <td data-title="Número"><?php echo $lote['num_lote'];?></td>
                    <td data-title="Prazo"><?php echo $lote['prazo_lote'];?></td>                        
                    <td data-title="Valor"><span class="floatright"><?php echo $this->Number->format($lote['vlr_lote'],
                            array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));?></span></td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image("page-find.gif", array("alt" => "Consultar","title" => "Consultar")), array('controller' => 'lotes', 'action' => 'view', $lote['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("edit-icon.gif", array("alt" => "Editar","title" => "Editar")), array('controller' => 'lotes', 'action' => 'edit', $lote['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("hr.gif", array("alt" => "Excluir","title" => "Excluir")), array('controller' => 'lotes', 'action' => 'delete', $lote['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o item # %s?', true), $lote['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php 
            if ( $currentModel['Licitacao']['vlr_lic'] != $vlr_lote_total )
                echo '<td colspan="2"><span class="floatright" style="color:red;">Alerta = Valor total dos lotes não confere com o da licitação -></span></td>';
            else
                echo '<td colspan="2"></td>';
            echo '<td><span class="floatright">';
            echo $this->Number->format($vlr_lote_total,
                       array('places' => 2, 'before'=>'', 'escape' => false, 'decimals' => ',', 'thousands' => '.'));
            echo '</span></td>';
            echo '<td></td>';
            ?>                  
            </table>
        </section>
    <?php endif; ?>
    </div><!-- /content-panel -->
    </div><!-- /col-lg-4 -->			
    </div><!-- /row -->         
    <div class="related-actions">
        <?php echo $this->Html->link(__('Novo Lote', true), array('controller' => 'lotes', 'action' => 'add', 'fk'=>$currentModel['Licitacao']['id']),array('class'=>'btn btn-primary'));?> </li>
    </div>        
</div>