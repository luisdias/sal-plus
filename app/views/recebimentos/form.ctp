<div id="center-column">
        <div class="recebimentos form">
        <?php echo $this->Form->create('Recebimento');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Recebimento'); 
                        ?>                        </legend>
        	<?php
                if ( isset($this->passedArgs['fk']) ) {
                    $fk = $this->passedArgs['fk'];
                } elseif ( isset($this->data['Recebimento']['fk']) ) {
                    $fk = $this->data['Recebimento']['fk'];
                } else {
                    $fk = null;
                }                
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                
                if ( !is_null($fk) ) {                
                    echo $this->Form->input('contrato_id',array('label'=>'Contrato','disabled'=>'true','value'=>$fk));
                    echo $this->Form->input('contrato_id',array('type'=>'hidden','value'=>$fk));
                } else {
                    echo $this->Form->input('contrato_id',array('label'=>'Contrato','empty'=>'-- Selecione o contrato --'));
                }
		
                echo $this->Form->input('dt_emissao',array('type'=>'text','label'=>'Data emissão','class'=>'datepicker','size'=>'10'));                
                echo $this->Form->input('dt_vencto',array('type'=>'text','label'=>'Data vencto','class'=>'datepicker','size'=>'10'));
                echo $this->Form->input('dt_pagto',array('type'=>'text','label'=>'Data pagto','class'=>'datepicker','size'=>'10'));                
		echo $this->Form->input('numero_documento',array('label'=>'Número documento','size'=>''));
		echo $this->Form->input('valor_parcela',array('label'=>'Valor parcela','size'=>''));
		echo $this->Form->input('valor_pago',array('label'=>'Valor pago','size'=>''));
		echo $this->Form->input('centro_de_custo',array('label'=>'Centro de custo','size'=>'25'));
		echo $this->Form->input('codigo_historico',array('label'=>'Código histórico','size'=>'25'));
		echo $this->Form->input('modified_by',array('label'=>'Modified_by','type'=>'hidden'));
                if ( !is_null($fk) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                 
	?>
                </fieldset>
        <?php echo $this->Form->end('Gravar');?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->