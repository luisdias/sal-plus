<?php echo $this->Form->create('Empresa');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Nova';
                else
                    $theAction = 'Editar';
                __($theAction . ' Empresa'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('razao_social',array('label'=>'Razão Social','size'=>'50'));
		echo $this->Form->input('name',array('label'=>'Nome','size'=>'50'));
		echo $this->Form->input('cnpj');
		echo $this->Form->input('endereco',array('label'=>'Endereço','size'=>'30'));
		echo $this->Form->input('complemento',array('size'=>'20'));
		echo $this->Form->input('bairro',array('size'=>'30'));
		echo $this->Form->input('cidade',array('size'=>'30'));
		echo $this->Form->input('estado',array('size'=>'2'));
		echo $this->Form->input('cep',array('size'=>'8'));
		echo $this->Form->input('telefone',array('size'=>'15'));
		echo $this->Form->input('website',array('size'=>'50'));
		//echo $this->Form->input('tipo_emp',array('label'=>'Tipo'));
                $tipos = array(
                    'Concorrente'=>'Concorrente',
                    'Parceiro'=>'Parceiro',
                    'Outro'=>'Outro'
                    );                
                echo $form->input('tipo_emp',array('type'=>'select','label'=>'Tipo','options'=>$tipos,'empty'=>'-- Selecione o tipo --'));               
		echo $this->Form->input('contato_01',array('label'=>'Contato','size'=>'50'));
		echo $this->Form->input('telefone_01',array('label'=>'Telefone','size'=>'15'));
		echo $this->Form->input('email_01',array('label'=>'Email','size'=>'30'));
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->