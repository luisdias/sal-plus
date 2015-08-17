<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Recebimento</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Contrato</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($recebimento['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $recebimento['Contrato']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Emissão</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['dt_emissao']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Vencto</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['dt_vencto']; ?></div>
                </div>                 
                <div class="form-group">
                    <label class="col-sm-2">Pagto</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['dt_pagto']; ?></div>
                </div>                 
                <div class="form-group">
                    <label class="col-sm-2">Número Documento</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['numero_documento']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor Parcela</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['valor_parcela']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor Pago</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['valor_pago']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Centro De Custo</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['centro_de_custo']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Código Histórico</label>
                    <div class="col-sm-10"><?php echo $recebimento['Recebimento']['codigo_historico']; ?></div>
                </div>
                <?php echo $this->element('adminfields',array('currentModel' => $recebimento['Recebimento'])); ?>
            </div>
        </div>
    </div>
</div>  
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->