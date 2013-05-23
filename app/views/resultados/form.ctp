<?php echo $this->Form->create('Resultado');?>
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
            if ( $this->action == 'edit' ) {
                echo $this->Form->input('licitacao_id',array('label'=>'Licitação','disabled'=>'true','value'=>$fk));
                echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                                    
            } else {
                echo $this->Form->input('licitacao_id',array('label'=>'Licitação','empty'=>'-- Selecione a licitação --'));
            }
            if ( $this->action == 'edit' ) {
                echo $this->Form->input('empresa_id',array('disabled'=>'true'));
                echo $this->Form->input('empresa_id',array('type'=>'hidden'));                                                        
            } else {
                echo $this->Form->input('empresa_id',array('empty'=>'-- Selecione a empresa --'));
            }
            echo $this->Form->input('habilitacao',array('label'=>'Habilitação'));
            echo $this->Form->input('nota_tecnica',array('label'=>'Nota técnica'));
            echo $this->Form->input('preco',array('label'=>'Preço'));
            echo $this->Form->input('desconto',array('label'=>'Desconto'));
            echo $this->Form->input('nota_de_preco',array('label'=>'Nota de preço'));
            echo $this->Form->input('nota_final',array('label'=>'Nota final'));
            echo $this->Form->input('vencedor',array('label'=>'Vencedor'));
            echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
            if ( !is_null($fk) )                
                echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->