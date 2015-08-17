<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Contrato',array('class'=>'form-horizontal style-form'));?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Contrato'); 
                        ?>                        
                        </legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('situacao_id','Situação',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('situacao_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione a situação --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('licitacao_id','Licitação',array('class'=>'col-sm-2 control-label'));                   
		echo $this->Form->input('licitacao_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione uma licitação encerrada --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero','Número',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('numero',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('objeto','Objeto',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('objeto',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','rows'=>'15','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('regime_execucao','Regime de execução',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('regime_execucao',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','rows'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('valor_global','Valor global',array('class'=>'col-sm-2 control-label'));                 
		echo $this->Form->input('valor_global',array('label'=>false,'div'=>'col-sm-10','size'=>'20','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('valor_parcela','Valor parcela',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('valor_parcela',array('label'=>false,'div'=>'col-sm-10','size'=>'20','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('condicoes_pagto','Condições pagto',array('class'=>'col-sm-2 control-label'));                                
		echo $this->Form->input('condicoes_pagto',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','rows'=>'15','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('criterios','Critérios',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('criterios',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','rows'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_base','Data Base',array('class'=>'col-sm-2 control-label'));                
                echo $this->Form->input('dt_base',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_inicio','Início',array('class'=>'col-sm-2 control-label'));                                
                echo $this->Form->input('dt_inicio',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));                
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('prazo_vigencia','Prazo Vigência',array('class'=>'col-sm-2 control-label'));                                
		echo $this->Form->input('prazo_vigencia',array('label'=>false,'div'=>'col-sm-10','size'=>'5','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_conclusao','Conclusão',array('class'=>'col-sm-2 control-label'));                                
                echo $this->Form->input('dt_conclusao',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_assinatura','Assinatura',array('class'=>'col-sm-2 control-label'));                                
                echo $this->Form->input('dt_assinatura',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_publicacao','Publicação',array('class'=>'col-sm-2 control-label'));                                
                echo $this->Form->input('dt_publicacao',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));                
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('veiculo_publicacao','Veículo Publicação',array('class'=>'col-sm-2 control-label'));                
                echo $this->Form->input('veiculo_publicacao',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('reajuste_id','Reajuste',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('reajuste_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione a forma de reajuste --','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('atualizacao_monetaria','Atualização Monetária',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('atualizacao_monetaria',array('label'=>false,'div'=>'col-sm-10','size'=>'5','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('garantia_id','Garantia',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('garantia_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione a forma de garantia --','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('percentual_garantia','Percentual Garantia',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('percentual_garantia',array('label'=>false,'div'=>'col-sm-10','size'=>'5','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero_processo','Número Processo',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('numero_processo',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('ano_processo','Ano Processo',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('ano_processo',array('label'=>false,'div'=>'col-sm-10','size'=>'4','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero_empenho','Número Empenho',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('numero_empenho',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                                
		echo $this->Form->input('modified_by',array('label'=>false,'type'=>'hidden'));
	?>
                </fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div><!-- col-lg-12-->      	
</div><!-- /row -->  
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->