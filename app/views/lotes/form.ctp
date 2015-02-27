<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Lote',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Lote'); 
                ?></legend>
	<?php
            echo $this->Form->input('id');
            
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Lote']['fk']) ) {
                $fk = $this->data['Lote']['fk'];
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
            echo $this->Form->label('num_lote','Número',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('num_lote',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('vlr_lote','Valor',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('vlr_lote',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('prazo_lote','Prazo (em dias)',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('prazo_lote',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
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