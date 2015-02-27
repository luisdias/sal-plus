<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Aditivo',array('class'=>'form-horizontal style-form'));?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Aditivo'); 
                        ?>                        </legend>
        	<?php
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Aditivo']['fk']) ) {
                    $fk = $this->data['Aditivo']['fk'];
                } else {
                    $fk = null;
                }
                
                echo $this->Form->input('id',array('label'=>'Id','size'=>''));

                echo "<div class=\"form-group\">";
                echo $this->Form->label('contrato_id','Contrato',array('class'=>'col-sm-2 control-label'));
                if ( !is_null($fk) ) {
                    echo $this->Form->input('contrato_id',array('disabled'=>'true','label'=>false,'div'=>'col-sm-10', 'value'=>$fk,'class'=>'form-control'));
                    echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));                                    
                } else {
                    echo $this->Form->input('contrato_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o contrato --','class'=>'form-control'));
                }     
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('tipoaditivo_id','Tipo',array('class'=>'col-sm-2 control-label'));
                echo $this->Form->input('tipoaditivo_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o tipo --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero','Número',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('numero',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero_processo','Número processo',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('numero_processo',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('ano_processo','Ano processo',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('ano_processo',array('label'=>false,'div'=>'col-sm-10','size'=>'4','class'=>'form-control'));
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
                echo $this->Form->label('veiculo_publicacao','Veículo publicação',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('veiculo_publicacao',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('texto_aditivo','Texto aditivo',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('texto_aditivo',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','rows'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('valor_global','Valor global',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('valor_global',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('valor_parcela','Valor parcela',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('valor_parcela',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('prazo','Prazo',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('prazo',array('label'=>false,'div'=>'col-sm-10','size'=>'5','class'=>'form-control'));
                echo "</div>";
                
		echo $this->Form->input('modified_by',array('label'=>false,'div'=>'col-sm-10','type'=>'hidden'));
                
                if ( !is_null($fk) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
                </fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div><!-- col-lg-12-->      	
</div><!-- /row -->
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->