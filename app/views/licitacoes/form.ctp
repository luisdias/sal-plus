<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Licitacao',array('class'=>'form-horizontal style-form'));?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Nova';
                else
                    $theAction = 'Editar';
                __($theAction . ' Licitação'); 
                ?></legend>
	<?php
		echo $this->Form->input('id');
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('status','Status',array('class'=>'col-sm-2 control-label'));                
                $status_licitacao = array(
                    'Publicada'=>'Publicada',
                    'Encerrada'=>'Encerrada',
                    'Anulada'=>'Anulada',
                    'Revogada'=>'Revogada',
                    'Convalidada'=>'Convalidada');
                echo $form->input('status',array('label'=>false,'div'=>'col-sm-10','type'=>'select','options'=>$status_licitacao,'empty'=>'-- Selecione o status --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('contratante_id','Contratante',array('class'=>'col-sm-2 control-label'));                                
		echo $this->Form->input('contratante_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o contratante --','class'=>'form-control'));                
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('modalidade_id','Modalidade',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('modalidade_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione a modalidade --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('tipolicitacao_id','Tipo',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('tipolicitacao_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o tipo --','class'=>'form-control'));
                echo "</div>";
                                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('regime','Regime',array('class'=>'col-sm-2 control-label'));                
                $regimes = array(
                    'Global'=>'Empreitada por preço global',
                    'Unitário'=>'Empreitada por preço unitário'
                );
                echo $form->input('regime',array('label'=>false,'div'=>'col-sm-10','type'=>'select','options'=>$regimes,'empty'=>'-- Selecione o regime --','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('num_edital','Edital',array('class'=>'col-sm-2 control-label'));                
                echo $this->Form->input('num_edital',array('label'=>false,'div'=>'col-sm-10','size'=>'10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('cl','Código',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('cl',array('label'=>false,'div'=>'col-sm-10','size'=>'10','class'=>'form-control'));		
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('indice','Índice',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('indice',array('label'=>false,'div'=>'col-sm-10','size'=>'10','class'=>'form-control'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('local','Local',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('local',array('label'=>false,'div'=>'col-sm-10','size'=>'50'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('objeto','Objeto',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('objeto',array('label'=>false,'div'=>'col-sm-10','cols'=>'80','class'=>'form-control'));
                echo "</div>";
                
                if ( $user['Usuario']['perfil'] == 'admin' ) {
                    echo "<div class=\"form-group\">";
                    echo $this->Form->label('historico','Histórico *',array('class'=>'col-sm-2 control-label'));                                    
                    echo $this->Form->input('historico',array('label'=>false,'div'=>'col-sm-8','class'=>'form-control'));
                    echo $this->Html->tag('span','campo para informações confidenciais (admin)',array('class'=>'col-sm-2 control-label'));
                    echo "</div>";                    
                }
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('dt_abertura','Abertura',array('class'=>'col-sm-2 control-label'));                
                echo $this->Form->input('dt_abertura',array('type'=>'text','label'=>false,'div'=>'col-sm-10','class'=>'datepicker form-control','size'=>'10'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('vlr_lic','Valor',array('class'=>'col-sm-2 control-label'));                
		echo $this->Form->input('vlr_lic',array('label'=>false,'div'=>'col-sm-10','size'=>'10'));
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