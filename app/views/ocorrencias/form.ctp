    <div id="center-column">
        <div class="ocorrencias form">
        <?php echo $this->Form->create('Ocorrencia');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Nova';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Ocorrência'); 
                        ?>                        </legend>
        	<?php
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Ocorrencia']['fk']) ) {
                    $fk = $this->data['Ocorrencia']['fk'];
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
		echo $this->Form->input('tipoocorrencia_id',array('label'=>'Tipo','empty'=>'-- Selecione o tipo --'));
                echo $this->Form->input('dt_ocorrencia',array('type'=>'text','label'=>'Data','class'=>'datepicker','size'=>'10'));
		echo $this->Form->input('texto_ocorrencia',array('label'=>'Texto','cols'=>'80','rows'=>'15'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
                if ( !is_null($fk) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->