    <div id="center-column">
        <div class="tipoocorrencias form">
        <?php echo $this->Form->create('Tipoocorrencia');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Tipo de ocorrência'); 
                        ?>                        </legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
		echo $this->Form->input('title',array('label'=>'Descrição','size'=>'50'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->