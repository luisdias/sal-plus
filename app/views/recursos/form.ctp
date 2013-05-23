    <div id="center-column">
        <div class="recursos form">
        <?php echo $this->Form->create('Recurso');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Recurso'); 
                        ?>                        </legend>
        	<?php
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Recurso']['fk']) ) {
                    $fk = $this->data['Recurso']['fk'];
                } else {
                    $fk = null;
                }                
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                if ( !is_null($fk) ) {
                    echo $this->Form->input('contrato_id',array('disabled'=>'true','label'=>'Contrato','value'=>$fk));
                    echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));                                    
                } else {
                    echo $this->Form->input('contrato_id',array('label'=>'Contrato','empty'=>'-- Selecione o contrato --'));
                }
		echo $this->Form->input('pessoa_id',array('label'=>'Pessoa','empty'=>'-- Selecione a pessoa --'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
                if ( !is_null($fk) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->