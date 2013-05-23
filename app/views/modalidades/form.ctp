<?php echo $this->Form->create('Modalidade');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Nova';
                else
                    $theAction = 'Editar';
                __($theAction . ' Modalidade'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title',array('label'=>'Descrição'));
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->