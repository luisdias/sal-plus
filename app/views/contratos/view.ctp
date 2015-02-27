<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Contrato</h4>
            <div class="form-horizontal style-form">
                <div class="form-group">
                    <label class="col-sm-2">ID</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['id']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Situação</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($contrato['Situacao']['title'], array('controller' => 'situacoes', 'action' => 'view', $contrato['Situacao']['id'])); ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Número</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['numero']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Objeto</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['objeto']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Regime Execução</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['regime_execucao']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Valor Global</label>
                    <div class="col-sm-10"><?php echo $this->Number->format($contrato['Contrato']['valor_global'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Valor Parcela</label>
                    <div class="col-sm-10"><?php echo $this->Number->format($contrato['Contrato']['valor_parcela'],
                        array(
                        'before' => '', 'after' => '', 'zero' => 0, 'places' => 2, 'thousands' => '.',
                        'decimals' => ',', 'negative' => '()', 'escape' => true
                        )                                
                        ); ?></div>
                </div>                
                <div class="form-group">
                    <label class="col-sm-2">Condições Pagto</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['condicoes_pagto']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Critérios</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['criterios']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Dt Base</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['dt_base']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Dt Início</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['dt_inicio']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Prazo Vigência</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['prazo_vigencia']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Dt Conclusão</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['dt_conclusao']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Dt Assinatura</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['dt_assinatura']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Dt Publicação</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['dt_publicacao']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Veículo Publicação</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['veiculo_publicacao']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Reajuste</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($contrato['Reajuste']['title'], array('controller' => 'reajustes', 'action' => 'view', $contrato['Reajuste']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Atualização Monetária</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['atualizacao_monetaria']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Garantia</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($contrato['Garantia']['title'], array('controller' => 'garantias', 'action' => 'view', $contrato['Garantia']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Percentual Garantia</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['percentual_garantia']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Numero Processo</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['numero_processo']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Ano Processo</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['ano_processo']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Licitação</label>
                    <div class="col-sm-10"><?php echo $this->Html->link($contrato['Licitacao']['num_edital'], array('controller' => 'licitacoes', 'action' => 'view', $contrato['Licitacao']['id'])); ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Documento</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['documento']; ?></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Número Empenho</label>
                    <div class="col-sm-10"><?php echo $contrato['Contrato']['numero_empenho']; ?></div>
                </div>
                <?php echo $this->element('adminfields',array('currentModel' => $contrato['Contrato'])); ?>                    
            </div>
        </div>
    </div>
</div>    
<?php echo $this->element('aditivos',array('currentModel' => $contrato)); ?>
<?php echo $this->element('ocorrencias',array('currentModel' => $contrato)); ?>
<?php echo $this->element('recursos',array('currentModel' => $contrato)); ?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->