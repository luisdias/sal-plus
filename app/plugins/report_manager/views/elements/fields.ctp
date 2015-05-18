    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
    <fieldset>
        <legend><?php echo $modelClass; ?></legend>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <td class="reportManagerFieldAdd"><?php echo __d('report_manager','Add',true); ?></td>
                    <td><?php echo __d('report_manager','Field',true); ?></td>
                    <td class="reportManagerFieldPosition"><?php echo __d('report_manager','Position',true); ?></td>
                </tr>
            </thead>
	<?php
	foreach ($modelSchema as $field => $attributes): 
            echo '<tr>';
            echo '<td data-title="Adicionar">';            
            echo $this->Form->checkbox($modelClass.'.'.$field.'.'.'Add',array('hiddenField' => false,'checked'=>true));
            echo '</td>';         
            echo '<td data-title="Campo">';
            echo ( isset($labelFieldList[$modelClass][$field]) ? $labelFieldList[$modelClass][$field] : ( isset($labelFieldList['*'][$field]) ? $labelFieldList['*'][$field] : $field ));
            echo '</td>';
            echo '<td data-title="Posição">';
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Position',array('label'=>'','size'=>'4','maxlength'=>'4','class'=>'position'));
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Type',array('type'=>'hidden','value'=>$attributes['type']));
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Length',array('type'=>'hidden','value'=>$attributes['length']));
            echo '</td>';          
            echo '</tr>';
        endforeach;
        ?>
        </table>
        </section>
    </fieldset>