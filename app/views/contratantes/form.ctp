<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Contratante',array('class'=>'form-horizontal style-form'));?>
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

                echo "<div class=\"form-group\">";
                echo $this->Form->label('name','Nome',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('name',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";
                
                $tipos = array(
                    'Adm Dir'=>'Orgão da administração direta',
                    'Fdo Esp'=>'Fundo especial',
                    'Autarq'=>'Autarquia',
                    'Fdc Pub'=>'Fundação pública',
                    'Emp Pub'=>'Empresa pública',
                    'Soc Eco'=>'Sociedade de economia mista',                    
                    'Outro'=>'Outro'
                    );
                echo "<div class=\"form-group\">";
                echo $this->Form->label('tipo','Tipo',array('class'=>'col-sm-2 control-label'));                
                echo $form->input('tipo',array('label'=>false,'div'=>'col-sm-10','type'=>'select','options'=>$tipos,'empty'=>'-- Selecione o tipo --','class'=>'form-control'));
                echo "</div>";                               
                
                $categorias = array(
                    'União' => 'União',
                    'Estadual' => 'Estadual',
                    'Dist Fed' => 'Distrito federal',
                    'Municipal' => 'Municipal',
                );
                echo "<div class=\"form-group\">";
                echo $this->Form->label('categoria','Categoria',array('class'=>'col-sm-2 control-label'));
                echo $form->input('categoria',array('label'=>false,'div'=>'col-sm-10','type'=>'select','options'=>$categorias,'empty'=>'-- Selecione a categoria --','class'=>'form-control'));
                echo "</div>";
                
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
	?>
	</fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div><!-- col-lg-12-->      	
</div><!-- /row -->            
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->