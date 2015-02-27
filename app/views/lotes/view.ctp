<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Lote</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">Edital Licitação</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($licitacoes[$lote['Licitacao']['id']], array('controller' => 'licitacoes', 'action' => 'view', $lote['Licitacao']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Número</label>
                    <div class="col-sm-10"><?php echo $lote['Lote']['num_lote']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Valor</label>
                    <div class="col-sm-10"><?php echo $this->Number->format($lote['Lote']['vlr_lote'],array(
                    'places' => 2,
                    'before' => '',
                    'escape' => false,
                    'decimals' => ',',
                    'thousands' => '.')
                );?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Prazo</label>
                    <div class="col-sm-10"><?php echo $lote['Lote']['prazo_lote']; ?></div>
                </div>                
                <?php echo $this->element('adminfields',array('currentModel' => $lote['Lote'])); ?>
            </div>
        </div>
    </div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->