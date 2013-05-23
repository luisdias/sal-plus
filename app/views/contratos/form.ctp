    <div id="center-column">
        <div class="contratos form">
        <?php echo $this->Form->create('Contrato');?>
                <fieldset>
                        <legend>
                        <?php 
                        if ( $this->action == 'add' )
                            $theAction = 'Novo';
                        else
                            $theAction = 'Editar';
                        __($theAction . ' Contrato'); 
                        ?>                        </legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
		echo $this->Form->input('situacao_id',array('label'=>'Situação','empty'=>'-- Selecione a situação --'));
		echo $this->Form->input('licitacao_id',array('label'=>'Licitação','empty'=>'-- Selecione uma licitação encerrada --'));                
		echo $this->Form->input('numero',array('label'=>'Número','size'=>'15'));
		echo $this->Form->input('objeto',array('label'=>'Objeto','cols'=>'80','rows'=>'15'));
		echo $this->Form->input('regime_execucao',array('label'=>'Regime de execução','cols'=>'80','rows'=>'15'));
		echo $this->Form->input('valor_global',array('label'=>'Valor global','size'=>'20'));
		echo $this->Form->input('valor_parcela',array('label'=>'Valor parcela','size'=>'20'));
		echo $this->Form->input('condicoes_pagto',array('label'=>'Condições pagto','cols'=>'80','rows'=>'15'));
		echo $this->Form->input('criterios',array('label'=>'Critérios','cols'=>'80','rows'=>'15'));
                echo $this->Form->input('dt_base',array('type'=>'text','label'=>'Data base','class'=>'datepicker','size'=>'10'));
                echo $this->Form->input('dt_inicio',array('type'=>'text','label'=>'Início','class'=>'datepicker','size'=>'10'));                
		echo $this->Form->input('prazo_vigencia',array('label'=>'Prazo vigência','size'=>'5'));
                echo $this->Form->input('dt_conclusao',array('type'=>'text','label'=>'Conclusão','class'=>'datepicker','size'=>'10'));
                echo $this->Form->input('dt_assinatura',array('type'=>'text','label'=>'Assinatura','class'=>'datepicker','size'=>'10'));
                echo $this->Form->input('dt_publicacao',array('type'=>'text','label'=>'Publicação','class'=>'datepicker','size'=>'10'));                
                echo $this->Form->input('veiculo_publicacao',array('label'=>'Veículo publicação','size'=>'50'));
		echo $this->Form->input('reajuste_id',array('label'=>'Reajuste','empty'=>'-- Selecione a forma de reajuste --'));
		echo $this->Form->input('atualizacao_monetaria',array('label'=>'Atualização monetária','size'=>'5'));
		echo $this->Form->input('garantia_id',array('label'=>'Garantia','empty'=>'-- Selecione a forma de garantia --'));
		echo $this->Form->input('percentual_garantia',array('label'=>'Percentual garantia','size'=>'5'));
		echo $this->Form->input('numero_processo',array('label'=>'Número processo','size'=>'15'));
		echo $this->Form->input('ano_processo',array('label'=>'Ano processo','size'=>'4'));
		echo $this->Form->input('numero_empenho',array('label'=>'Número empenho','size'=>'15'));
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
     </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->