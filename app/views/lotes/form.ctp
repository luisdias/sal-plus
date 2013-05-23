<?php echo $this->Form->create('Lote');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Lote'); 
                ?></legend>
	<?php
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Lote']['fk']) ) {
                $fk = $this->data['Lote']['fk'];
            } else {
                $fk = null;
            }        
            if ( !is_null($fk) ) {
                echo $this->Form->input('licitacao_id',array('disabled'=>'true','label'=>'Licitação','value'=>$fk));
                echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                                    
            } else {
                echo $this->Form->input('licitacao_id',array('label'=>'Licitação','empty'=>'-- Selecione a licitação --'));        
            }      
            echo $this->Form->input('id');
            echo $this->Form->input('num_lote',array('label'=>'Número'));
            echo $this->Form->input('vlr_lote',array('label'=>'Valor'));
            echo $this->Form->input('prazo_lote',array('label'=>'Prazo (em dias)'));
            echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
            if ( !is_null($fk) )                
                echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->