<?php echo $this->Form->create('Contratante');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Contratante'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nome','size'=>'50'));
                $tipos = array(
                    'Adm Dir'=>'Orgão da administração direta',
                    'Fdo Esp'=>'Fundo especial',
                    'Autarq'=>'Autarquia',
                    'Fdc Pub'=>'Fundação pública',
                    'Emp Pub'=>'Empresa pública',
                    'Soc Eco'=>'Sociedade de economia mista',                    
                    'Outro'=>'Outro'
                    );
                echo $form->input('tipo',array('type'=>'select','options'=>$tipos,'empty'=>'-- Selecione o tipo --'));
                $categorias = array(
                    'União' => 'União',
                    'Estadual' => 'Estadual',
                    'Dist Fed' => 'Distrito federal',
                    'Municipal' => 'Municipal',
                );
                echo $form->input('categoria',array('type'=>'select','options'=>$categorias,'empty'=>'-- Selecione a categoria --'));
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->