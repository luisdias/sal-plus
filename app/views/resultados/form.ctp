<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Resultado',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Resultado'); 
                ?></legend>
	<?php
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Resultado']['fk']) ) {
                $fk = $this->data['Resultado']['fk'];
            } else {
                $fk = null;
            }         
            echo $this->Form->input('id');

            echo "<div class=\"form-group\">";
            echo $this->Form->label('licitacao_id','Licitação',array('class'=>'col-sm-2 control-label'));            
            if ( !is_null($fk) ) {
                echo $this->Form->input('licitacao_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','disabled'=>'true','value'=>$fk));
                echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                
            } else {
                if ( $this->action == 'edit' ) {
                    echo $this->Form->input('licitacao_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','disabled'=>'true','value'=>$fk));
                    echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                                    
                } else {
                    echo $this->Form->input('licitacao_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione a licitação --'));
                }                
            }
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('empresa_id','Empresa',array('class'=>'col-sm-2 control-label'));            
            if ( $this->action == 'edit' ) {
                echo $this->Form->input('empresa_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','disabled'=>'true'));
                echo $this->Form->input('empresa_id',array('type'=>'hidden'));                                                        
            } else {
                echo $this->Form->input('empresa_id',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','empty'=>'-- Selecione a empresa --'));
            }
            echo "</div>";
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('habilitacao','Habilitação',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('habilitacao',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('nota_tecnica','Nota técnica',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('nota_tecnica',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('preco','Preço',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('preco',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('desconto','Desconto',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('desconto',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('nota_de_preco','Nota de preço',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('nota_de_preco',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('nota_final','Nota final',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('nota_final',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
            echo "</div>";            
            
            echo "<div class=\"form-group\">";
            echo $this->Form->label('vencedor','Vencedor',array('class'=>'col-sm-2 control-label'));            
            echo $this->Form->input('vencedor',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
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