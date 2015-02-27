<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
        <?php echo $this->Form->create('Pessoa',array('class'=>'form-horizontal style-form'));?>
        <fieldset>
            <legend>
            <?php 
            if ( $this->action == 'add' )
                $theAction = 'Nova';
            else
                $theAction = 'Editar';
            __($theAction . ' Pessoa'); 
            ?>                        
            </legend>
        <?php
        echo $this->Form->input('id');
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('nome','Nome',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('nome',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'50'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('email','Email',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('email',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'50','maxlength'=>'255'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('telefone','Telefone',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('telefone',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'15'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('celular','Celular',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('celular',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'15'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('fax','Fax',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('fax',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'15'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('website','Website',array('class'=>'col-sm-2 control-label'));        
        echo $this->Form->input('website',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'50','maxlength'=>'255'));
        echo "</div>";        
        
        echo "<div class=\"form-group\">";
        echo $this->Form->label('papel','Papel',array('class'=>'col-sm-2 control-label'));
        echo $this->Form->input('papel',array('label'=>false,'div'=>'col-sm-10','class'=>'form-control','size'=>'25'));
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