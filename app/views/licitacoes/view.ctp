<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Licitação</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['id']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Status</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['status']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Código</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['cl']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Edital</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['num_edital']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Índice</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['indice']; ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Local</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['local']; ?></div>
                </div>                 
                <div class="form-group">
                    <label class="col-sm-2">Objeto</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['objeto']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Histórico</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['historico']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Data Abertura</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['dt_abertura']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Modalidade</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($licitacao['Modalidade']['title'], array('controller' => 'modalidades', 'action' => 'view', $licitacao['Modalidade']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Tipo</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($licitacao['Tipolicitacao']['title'], array('controller' => 'tipolicitacoes', 'action' => 'view', $licitacao['Tipolicitacao']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Regime</label>
                    <div class="col-sm-10"><?php echo $licitacao['Licitacao']['regime'];?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Usuário</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($licitacao['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $licitacao['Usuario']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor</label>
                    <div class="col-sm-10"><?php echo $this->Number->format($licitacao['Licitacao']['vlr_lic'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Contratante</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($licitacao['Contratante']['name'], array('controller' => 'contratantes', 'action' => 'view', $licitacao['Contratante']['id'])); ?></div>
                </div>              
                <?php echo $this->element('adminfields',array('currentModel' => $licitacao['Licitacao'])); ?>
            </div>
        </div>
    </div>
</div> 
<br/>

<?php echo $this->element('eventos',array('currentModel' => $licitacao)); ?>

<?php echo $this->element('lotes',array('currentModel' => $licitacao)); ?>

<?php echo $this->element('resultados',array('currentModel' => $licitacao,'empresas' => $empresas)); ?>

<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->