<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Recurso',array('class'=>'form-horizontal style-form'));?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Recurso'); 
                        ?>                        </legend>
        	<?php
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Recurso']['fk']) ) {
                    $fk = $this->data['Recurso']['fk'];
                } else {
                    $fk = null;
                }                
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('contrato_id','Contrato',array('class'=>'col-sm-2 control-label'));                
                if ( !is_null($fk) ) {
                    echo $this->Form->input('contrato_id',array('disabled'=>'true','label'=>false,'div'=>'col-sm-10','class'=>'form-control','value'=>$fk));
                    echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));                                    
                } else {
                    echo $this->Form->input('contrato_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione o contrato --'));
                }
                echo "</div>";                
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('pessoa_id','Pessoa',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('pessoa_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione a pessoa --'));
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