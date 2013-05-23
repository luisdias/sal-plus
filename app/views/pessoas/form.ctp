    <div id="center-column">
        <div class="pessoas form">
        <?php echo $this->Form->create('Pessoa');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Nova';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Pessoa'); 
                        ?>                        </legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
		echo $this->Form->input('nome',array('label'=>'Nome','size'=>'50'));
		echo $this->Form->input('email',array('label'=>'Email','size'=>'50','maxlength'=>'255'));
		echo $this->Form->input('telefone',array('label'=>'Telefone','size'=>'15'));
		echo $this->Form->input('celular',array('label'=>'Celular','size'=>'15'));
		echo $this->Form->input('fax',array('label'=>'Fax','size'=>'15'));
		echo $this->Form->input('website',array('label'=>'Website','size'=>'50','maxlength'=>'255'));
		echo $this->Form->input('papel',array('label'=>'Papel','size'=>'25'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->