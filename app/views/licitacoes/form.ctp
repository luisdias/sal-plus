<?php echo $this->Form->create('Licitacao');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Nova';
                else
                    $theAction = 'Editar';
                __($theAction . ' Licitação'); 
                ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'ID'));
                $status_licitacao = array(
                    'Publicada'=>'Publicada',
                    'Encerrada'=>'Encerrada',
                    'Anulada'=>'Anulada',
                    'Revogada'=>'Revogada',
                    'Convalidada'=>'Convalidada');
                echo $form->input('status',array('type'=>'select','options'=>$status_licitacao,'empty'=>'-- Selecione o status --'));
		echo $this->Form->input('contratante_id',array('label'=>'Contratante','empty'=>'-- Selecione o contratante --'));                
		echo $this->Form->input('modalidade_id',array('label'=>'Modalidade','empty'=>'-- Selecione a modalidade --'));
		echo $this->Form->input('tipolicitacao_id',array('label'=>'Tipo','empty'=>'-- Selecione o tipo --'));
                $regimes = array(
                    'Global'=>'Empreitada por preço global',
                    'Unitário'=>'Empreitada por preço unitário'
                );
                echo $form->input('regime',array('type'=>'select','options'=>$regimes,'empty'=>'-- Selecione o regime --'));
                echo $this->Form->input('num_edital',array('label'=>'Edital','size'=>'10'));                
		echo $this->Form->input('cl',array('label'=>'Código','size'=>'10'));		

		echo $this->Form->input('indice',array('label'=>'Índice','size'=>'10'));
		echo $this->Form->input('local',array('label'=>'Local','size'=>'50'));
		echo $this->Form->input('objeto',array('label'=>'Objeto','cols'=>'80'));
                if ( $user['Usuario']['perfil'] == 'admin' ) {
                    echo $this->Form->input('historico',array('label'=>'Histórico *','cols'=>'80'));
                    echo $this->Html->tag('span','utilize este campo para<br/> informações confidenciais<br/>( visível apenas para<br/> administradores )',array('class'=>'floatleft'));
                }
                echo $this->Form->input('dt_abertura',array('type'=>'text','label'=>'Abertura','class'=>'datepicker','size'=>'10'));
		echo $this->Form->input('vlr_lic',array('label'=>'Valor','size'=>'10'));
                echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->