<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Ocorrência</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $ocorrencia['Ocorrencia']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Data</label>
                    <div class="col-sm-10"><?php echo $ocorrencia['Ocorrencia']['dt_ocorrencia']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Texto</label>
                    <div class="col-sm-10"><?php echo $ocorrencia['Ocorrencia']['texto_ocorrencia']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Contrato</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($ocorrencia['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $ocorrencia['Contrato']['id'])); ?></div>
                </div>     
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($ocorrencia['Tipoocorrencia']['title'], array('controller' => 'tipoocorrencias', 'action' => 'view', $ocorrencia['Tipoocorrencia']['id'])); ?></div>
                </div>                
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('adminfields',array('currentModel' => $ocorrencia['Ocorrencia'])); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->