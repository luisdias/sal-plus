<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Ocorrencia',array('class'=>'form-horizontal style-form'));?>
        <fieldset>
			<legend>
			<?php 
			if ( $this->action == 'add' )
				$theAction = 'Nova';
			else
				$theAction = 'Editar';
			__($theAction . ' Ocorrência'); 
			?>                        
			</legend>
        <?php
        echo $this->Form->input('id');        
        if ( isset($this->passedArgs['fk']) ) {
            $fk = $this->passedArgs['fk'];
        } elseif ( isset($this->data['Ocorrencia']['fk']) ) {
            $fk = $this->data['Ocorrencia']['fk'];
        } else {
            $fk = null;
        }                
        
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
        echo $this->Form->label('tipoocorrencia_id','Tipo',array('class'=>'col-sm-2 control-label'));                 
        echo $this->Form->input('tipoocorrencia_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione o tipo --'));
        echo "</div>";
                
        echo "<div class=\"form-group\">";
        echo $this->Form->label('dt_ocorrencia','Data',array('class'=>'col-sm-2 control-label'));                 
        echo $this->Form->input('dt_ocorrencia',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
        echo "</div>";
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('texto_ocorrencia','Texto',array('class'=>'col-sm-2 control-label'));                 
        echo $this->Form->input('texto_ocorrencia',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','cols'=>'80','rows'=>'15'));
        echo "</div>";        
        
        echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
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