<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Usuario',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend>Alterar senha</legend>
	<?php
		echo $this->Form->input('id');
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('name','Nome',array('class'=>'col-sm-2 control-label'));                  
		echo $this->Form->input('name',array('disabled'=>'true','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('login','Login',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('login',array('disabled'=>'true','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('nova_senha','Nova senha',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('nova_senha',array('type'=>'password','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";

                echo "<div class=\"form-group\">";
                echo $this->Form->label('confirma_senha','Confirmar senha',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('confirma_senha',array('type'=>'password','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";

                echo $this->Form->input('name',array('type' => 'hidden'));
                echo $this->Form->input('login',array('type' => 'hidden'));
                echo $this->Form->input('tmp_senha',array('type' => 'hidden','value'=>''));
                echo $this->Form->input('perfil',array('type' => 'hidden'));

                echo "<div class=\"form-group\">";
                echo $this->Form->label('perfil','Perfil',array('class'=>'col-sm-2 control-label'));                
                $perfis = array('admin'=>'Administrador','user'=>'Usuário','guest'=>'Convidado');
                echo $form->input('perfil',array('type'=>'select','options'=>$perfis,'disabled'=>'true','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
	?>
	</fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->