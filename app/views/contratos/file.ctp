<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Contrato', array('type' => 'file','class'=>'form-horizontal style-form'));?>
                <fieldset>
                        <legend>Contrato :: Anexar Arquivo</legend>
        	<?php
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero','Número',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('numero',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control','disabled'=>'true'));
                echo "</div>";                
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('documento','Documento',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('documento',array('type' => 'file','title'=>'Selecione o arquivo com o aditivo digitalizado','label'=>false,'div'=>'col-sm-8'));
                echo '<div class="col-sm-2"><span class="badge bg-important">gif, jpg, png</span></div>';
                echo "</div>";
                
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
	?>
                </fieldset>
        <?php echo $this->Form->end(__('Gravar', true));?>
        </div>
    </div> 	
</div>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->