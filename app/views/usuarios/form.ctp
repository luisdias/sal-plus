<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Usuário'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label' => 'Nome'));
		echo $this->Form->input('login');
		//echo $this->Form->input('senha', array('type' => 'password'));
                //echo $this->Form->input('senha2',array('label' => 'Confirmar senha', 'type' => 'password'));
                //echo $this->Form->input('dmpass',array('type' => 'hidden'));
                $perfis = array('admin'=>'Administrador','user'=>'Usuário','guest'=>'Convidado');
                echo $form->input('perfil',array('type'=>'select','options'=>$perfis));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->