<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Aditivo</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['id']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Número Aditivo</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['numero']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Contrato</label>
                    <div class="col-sm-10">
                        <?php echo $this->Html->link($aditivo['Contrato']['numero'], array('controller' => 'contratos', 'action' => 'view', $aditivo['Contrato']['id'])); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Número Processo</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['numero_processo']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Ano</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['ano_processo']; ?>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10">
                        <?php echo $this->Html->link($aditivo['Tipoaditivo']['title'], array('controller' => 'tipoaditivos', 'action' => 'view', $aditivo['Tipoaditivo']['id'])); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Assinatura</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['dt_assinatura']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Publicação</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['dt_publicacao']; ?>
                    </div>
                </div>            
                <div class="form-group">
                    <label class="col-sm-2">Veículo Publicação</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['veiculo_publicacao']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Texto</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['texto_aditivo']; ?>
                    </div>
                </div>               
                <div class="form-group">
                    <label class="col-sm-2">Documento</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['documento']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor global</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['valor_global']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor parcela</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['valor_parcela']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Prazo</label>
                    <div class="col-sm-10">
                        <?php echo $aditivo['Aditivo']['prazo']; ?>
                    </div>
                </div>            
                <?php echo $this->element('adminfields',array('currentModel' => $aditivo['Aditivo'])); ?>
            </div>                
        </div>
    </div>
</div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->