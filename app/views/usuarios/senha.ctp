<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend>Alterar senha</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('disabled'=>'true','label' => 'Nome'));
                echo $this->Form->input('name',array('type' => 'hidden'));
		echo $this->Form->input('login',array('disabled'=>'true'));
                echo $this->Form->input('login',array('type' => 'hidden'));
		echo $this->Form->input('nova_senha', array('label' => 'Nova senha','type' => 'password'));
                echo $this->Form->input('confirma_senha',array('label' => 'Confirmar senha', 'type' => 'password'));
                echo $this->Form->input('tmp_senha',array('type' => 'hidden','value'=>''));
                $perfis = array('admin'=>'Administrador','user'=>'Usuário','guest'=>'Convidado');
                echo $form->input('perfil',array('disabled'=>'true','type'=>'select','options'=>$perfis));		
                echo $this->Form->input('perfil',array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->