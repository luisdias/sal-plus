    <div id="center-column">
        <div class="aditivos form">
        <?php echo $this->Form->create('Aditivo');?>
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
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Aditivo']['fk']) ) {
                    $fk = $this->data['Aditivo']['fk'];
                } else {
                    $fk = null;
                }
                if ( !is_null($fk) ) {
                    echo $this->Form->input('contrato_id',array('disabled'=>'true','label'=>'Contrato','value'=>$fk));
                    echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));                                    
                } else {
                    echo $this->Form->input('contrato_id',array('label'=>'Contrato','empty'=>'-- Selecione o contrato --'));
                }                
                echo $this->Form->input('tipoaditivo_id',array('label'=>'Tipo','empty'=>'-- Selecione o tipo --'));
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
		echo $this->Form->input('numero',array('label'=>'Número','size'=>'15'));
		echo $this->Form->input('numero_processo',array('label'=>'Número processo','size'=>'15'));
		echo $this->Form->input('ano_processo',array('label'=>'Ano processo','size'=>'4'));
                echo $this->Form->input('dt_assinatura',array('type'=>'text','label'=>'Assinatura','class'=>'datepicker','size'=>'10'));
                echo $this->Form->input('dt_publicacao',array('type'=>'text','label'=>'Publicação','class'=>'datepicker','size'=>'10'));
		echo $this->Form->input('veiculo_publicacao',array('label'=>'Veículo publicação','size'=>'50'));
		echo $this->Form->input('texto_aditivo',array('label'=>'Texto aditivo','cols'=>'80','rows'=>'15'));
		echo $this->Form->input('valor_global',array('label'=>'Valor global','size'=>'15'));
		echo $this->Form->input('valor_parcela',array('label'=>'Valor parcela','size'=>'15'));
		echo $this->Form->input('prazo',array('label'=>'Prazo','size'=>'5'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
                if ( !is_null($fk) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->