<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Evento</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">Edital Licitação</label>
                    <div class="col-sm-10">
                    <?php echo $this->Html->link($licitacoes[$evento['Licitacao']['id']], array('controller' => 'licitacoes', 'action' => 'view', $evento['Licitacao']['id'])); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Data</label>
                    <div class="col-sm-10"><?php echo $evento['Evento']['dt_eve']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Texto</label>
                    <div class="col-sm-10"><?php echo $evento['Evento']['texto_eve']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10"><?php echo $tipoeventos[$evento['Evento']['tipoevento_id']]; ?></div>
                </div>
                <?php echo $this->element('adminfields',array('currentModel' => $evento['Evento'])); ?>
            </div>
        </div>
    </div>
</div> 
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->