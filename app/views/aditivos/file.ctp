<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Aditivo', array('type' => 'file','class'=>'form-horizontal style-form'));?>
                <fieldset>
                        <legend>Aditivo :: Anexar Arquivo</legend>
        	<?php
                
		echo $this->Form->input('id',array('label'=>'Id','size'=>''));
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('tipoaditivo_id','Tipo',array('class'=>'col-sm-2 control-label'));
                echo $this->Form->input('tipoaditivo_id',array('label'=>false,'div'=>'col-sm-10','empty'=>'-- Selecione o tipo --','class'=>'form-control','disabled'=>'true'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('numero_processo','Número processo',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('numero_processo',array('label'=>false,'div'=>'col-sm-10','size'=>'15','class'=>'form-control','disabled'=>'true'));
                echo "</div>";
                
                echo "<div class=\"form-group\">";
                echo $this->Form->label('documento','Documento',array('class'=>'col-sm-2 control-label'));
		echo $this->Form->input('documento',array('type' => 'file','title'=>'Selecione o arquivo com o aditivo digitalizado','label'=>false,'div'=>'col-sm-8'));
                echo '<div class="col-sm-2"><span class="badge bg-important">gif, jpg, png</span></div>';
                echo "</div>";
                
		echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
                if ( isset($this->passedArgs['fk']) )                
                    echo $this->Form->input('fk',array('type'=>'hidden','value'=>$this->passedArgs['fk']));                
	?>
                </fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div> 	
</div>
<!-- SALPLUS | Copyright: 2013-2015 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->