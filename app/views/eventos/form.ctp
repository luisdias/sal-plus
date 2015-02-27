<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Evento',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Evento'); 
                ?></legend>
	<?php
            echo $this->Form->input('id');
            
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Evento']['fk']) ) {
                $fk = $this->data['Evento']['fk'];
            } else {
                $fk = null;
            }
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('licitacao_id','Licitação',array('class'=>'col-sm-2 control-label'));
            if ( !is_null($fk) ) {
                echo $this->Form->input('licitacao_id',array('disabled'=>'true','label'=>false,'div'=>'col-sm-10','value'=>$fk,'class'=>'form-control'));
                echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                                    
            } else {
                echo $this->Form->input('licitacao_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione a licitação --','class'=>'form-control'));        
            }
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('tipoevento_id','Tipo',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('tipoevento_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o tipo --','class'=>'form-control'));                
            echo "</div>";
                
            echo "<div class=\"form-group\">";
            echo $this->Form->label('dt_eve','Data',array('class'=>'col-sm-2 control-label'));            
            if ( $this->action == 'add' )
                echo $this->Form->input('dt_eve',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10','value'=>date('d/m/Y')));
            else
                echo $this->Form->input('dt_eve',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
            echo "</div>";            

            echo "<div class=\"form-group\">";
            echo $this->Form->label('texto_eve','Texto',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('texto_eve',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','class'=>'form-control'));
            echo "</div>";                        
            
            echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
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