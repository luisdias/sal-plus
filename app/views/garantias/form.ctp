<div id="center-column">
    <div class="garantias form">
    <?php echo $this->Form->create('Garantia');?>
            <fieldset>
                    <legend>
                    <?php 
                    if ( $this->action == 'add' )
                        $theAction = 'Nova';
                    else
                        $theAction = 'Editar';
                    __($theAction . ' Garantia'); 
                    ?>                        </legend>
            <?php
            echo $this->Form->input('id',array('label'=>'Id','size'=>''));
            echo $this->Form->input('title',array('label'=>'Descrição','size'=>'20'));
            echo $this->Form->input('modified_by',array('label'=>'Modified_by','type'=>'hidden'));
    ?>
            </fieldset>
    <?php echo $this->Form->end(__('Gravar', true));?>
    </div>
 </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->