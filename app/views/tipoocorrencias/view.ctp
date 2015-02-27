<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Situação</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $tipoocorrencia['Tipoocorrencia']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Descrição</label>
                    <div class="col-sm-10"><?php echo $tipoocorrencia['Tipoocorrencia']['title']; ?></div>
                </div>                
                <?php echo $this->element('adminfields',array('currentModel' => $tipoocorrencia['Tipoocorrencia'])); ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('ocorrencias',array('currentModel' => $tipoocorrencia)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->