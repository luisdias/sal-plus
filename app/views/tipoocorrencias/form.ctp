<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Tipoocorrencia',array('class'=>'form-horizontal style-form'));?>
        <fieldset>
                <legend>
                <?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Tipo de ocorrência'); 
                ?>                        
                </legend>
        <?php
        echo $this->Form->input('id',array('label'=>'Id','size'=>''));
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('title','Descrição',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('title',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'50'));
        echo "</div>";
        
        echo $this->Form->input('modified_by',array('label'=>'Modificado por','type'=>'hidden'));
?>
        </fieldset>
        <?php echo $this->Form->submit('Gravar',array('class'=>'btn btn-primary')); ?>
        <?php echo $this->Form->end();?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->