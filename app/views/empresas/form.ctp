<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Empresa',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Nova';
                else
                    $theAction = 'Editar';
                    echo $theAction . ' Empresa'; 
                ?></legend>
	<?php
		echo $this->Form->input('id');
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('razao_social','Razão Social',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('razao_social',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";                
                               
                echo "<div class=\"form-group\">";
                echo $this->Form->label('name','Nome',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('name',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('cnpj','CNPJ',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('cnpj',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('endereco','Endereço',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('endereco',array('label'=>false,'div'=>'col-sm-10','size'=>'30','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('complemento','Complemento',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('complemento',array('label'=>false,'div'=>'col-sm-10','size'=>'20','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('bairro','Bairro',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('bairro',array('size'=>'30','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('cidade','Cidade',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('cidade',array('size'=>'30','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('estado','Estado',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('estado',array('size'=>'2','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('cep','CEP',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('cep',array('size'=>'8','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('telefone','Telefone',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('telefone',array('size'=>'15','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('website','Website',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('website',array('size'=>'50','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));
                echo "</div>";
                		
                $tipos = array(
                    'Concorrente'=>'Concorrente',
                    'Parceiro'=>'Parceiro',
                    'Outro'=>'Outro'
                    );                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('tipo_emp','Tipo',array('class'=>'col-sm-2 control-label'));                
                echo $form->input('tipo_emp',array('type'=>'select','label'=>false,'div'=>'col-sm-10','options'=>$tipos,'empty'=>'-- Selecione o tipo --','class'=>'form-control'));
                echo "</div>";

                echo "<div class=\"form-group\">";
                echo $this->Form->label('contato_01','Contato',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('contato_01',array('label'=>false,'div'=>'col-sm-10','size'=>'50','class'=>'form-control'));
                echo "</div>";

                echo "<div class=\"form-group\">";
                echo $this->Form->label('telefone_01','Telefone',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('telefone_01',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('email_01','Email',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('email_01',array('label'=>false,'div'=>'col-sm-10','size'=>'30','class'=>'form-control'));
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