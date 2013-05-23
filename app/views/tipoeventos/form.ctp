<?php echo $this->Form->create('Tipoevento');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Tipo de evento'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('label'=>'Descrição'));
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->