<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Recebimento',array('class'=>'form-horizontal style-form'));?>
            <fieldset>
                    <legend>
                    <?php 
                    if ( $this->action == 'add' )
                        $theAction = 'Novo';
                    else
                        $theAction = 'Editar';
                    __($theAction . ' Recebimento'); 
                    ?>                        
                    </legend>
            <?php
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Recebimento']['fk']) ) {
                $fk = $this->data['Recebimento']['fk'];
            } else {
                $fk = null;
            }                
            echo $this->Form->input('id');

            echo "<div class=\"form-group\">";
            echo $this->Form->label('contrato_id','Contrato',array('class'=>'col-sm-2 control-label'));
            if ( !is_null($fk) ) {                
                echo $this->Form->input('contrato_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','disabled'=>'true','value'=>$fk));
                echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));
            } else {
                echo $this->Form->input('contrato_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione o contrato --'));
            }
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('dt_emissao','Data emissão',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('dt_emissao',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('dt_vencto','Data vencto',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('dt_vencto',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('dt_pagto','Data pagto',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('dt_pagto',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('numero_documento','Número documento',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('numero_documento',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>''));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('valor_parcela','Valor parcela',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('valor_parcela',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>''));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('valor_pago','Valor pago',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('valor_pago',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>''));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('centro_de_custo','Centro de custo',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('centro_de_custo',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'25'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('codigo_historico','Código histórico',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('codigo_historico',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'25'));
            echo "</div>";            
            
            echo $this->Form->input('modified_by',array('label'=>'Modified_by','type'=>'hidden'));
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