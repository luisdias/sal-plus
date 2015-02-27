<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Pessoa</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">Edital Licitação</label>
                    <div class="col-sm-10">
                        <?php echo $this->Html->link($licitacoes[$resultado['Licitacao']['id']], array('controller' => 'licitacoes', 'action' => 'view', $resultado['Licitacao']['id'])); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Empresa</label>
                    <div class="col-sm-10">
                        <?php echo $this->Html->link($resultado['Empresa']['name'], array('controller' => 'empresas', 'action' => 'view', $resultado['Empresa']['id'])); ?>
                    </div>
                </div>              
                <div class="form-group">
                    <label class="col-sm-2">Habilitação</label>
                    <div class="col-sm-10"><?php echo ( $resultado['Resultado']['habilitacao'] == 0 ? 'N' : 'S' ); ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Nota técnica</label>
                    <div class="col-sm-10"><?php echo $resultado['Resultado']['nota_tecnica']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Preço</label>
                    <div class="col-sm-10"><?php echo $resultado['Resultado']['preco']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Desconto</label>
                    <div class="col-sm-10"><?php echo $resultado['Resultado']['desconto']; ?></div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2">Nota de preço</label>
                    <div class="col-sm-10"><?php echo $resultado['Resultado']['nota_de_preco']; ?></div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2">Nota final</label>
                    <div class="col-sm-10"><?php echo $resultado['Resultado']['nota_final']; ?></div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-2">Vencedor</label>
                    <div class="col-sm-10"><?php echo ( $resultado['Resultado']['vencedor'] == 0 ? 'N' : 'S' ); ?></div>
                </div> 
                <?php echo $this->element('adminfields',array('currentModel' => $resultado['Resultado'])); ?>
            </div>
        </div>
    </div>
</div>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->