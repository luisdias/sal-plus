    <div id="center-column">
        <div class="aditivos form">
        <?php echo $this->Form->create('Aditivo', array('type' => 'file'));?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Aditivo'); 
                        ?>                        </legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));                
                echo $this->Form->input('tipoaditivo_id',array('label'=>'Tipo','empty'=>'-- Selecione o tipo --','disabled'=>'true'));
		echo $this->Form->input('numero',array('label'=>'Número','size'=>'15','disabled'=>'true'));
		echo $this->Form->input('documento',array('type' => 'file','title'=>'Selecione o arquivo com o aditivo digitalizado','label'=>'Documento','size'=>'50','maxlength'=>'255'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
                if ( isset($this->passedArgs['fk']) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$this->passedArgs['fk']));                
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->