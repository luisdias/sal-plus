<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Modalidade</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">Modalidade</label>
                    <div class="col-sm-10"><?php echo $modalidade['Modalidade']['id']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Descrição</label>
                    <div class="col-sm-10"><?php echo $modalidade['Modalidade']['title']; ?></div>
                </div>                  
                <?php echo $this->element('adminfields',array('currentModel' => $modalidade['Modalidade'])); ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('licitacoes',array('currentModel' => $modalidade)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->