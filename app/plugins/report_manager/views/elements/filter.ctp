    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
    <fieldset>
        <legend><?php echo $modelClass; ?></legend>
        <section id="no-more-tables">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    
                    <th><?php echo __d('report_manager','Field'); ?></th>
                    <th class="reportManagerFilterNot"><?php echo __d('report_manager','Not'); ?></th>
                    <th class="reportManagerFilterCriteria"><?php echo __d('report_manager','Criteria'); ?></th>
                    <th class="reportManagerFilterExample"><?php echo __d('report_manager','Example'); ?></th>
                </tr>
            </thead>
	<?php
        $filterOptions = array(          
          '='   => '=',
          'LIKE' => 'LIKE',
          '>' => '>',
          '<' => '<',
          '>=' => '>=',
          '<=' => '<=',
          'null' => 'is Null'
        );
        $logicalOptions = array(
            ''=> '<None>',
            'AND'=>'AND',
            'OR'=>'OR'
            );
        $i = 1;
	foreach ($modelSchema as $field => $attributes): 
            echo '<tr>';         
            echo '<td data-title="'.__d('report_manager','Field',true).'">';
            echo ( isset($labelFieldList[$modelClass][$field]) ? $labelFieldList[$modelClass][$field] : ( isset($labelFieldList['*'][$field]) ? $labelFieldList['*'][$field] : $field ));
            echo '</td>';
            echo '<td data-title="'.__d('report_manager','Not',true).'">';
            if (isset($this->data[$modelClass][$field]['Not']))
                $modelFieldNot = $this->data[$modelClass][$field]['Not'];
            else
                $modelFieldNot = false;            
            echo $this->Form->checkbox($modelClass.'.'.$field.'.'.'Not',array('hiddenField' => true,'checked'=>$modelFieldNot,'class'=>'form-control'));
            echo '</td>';            
            echo '<td data-title="'.__d('report_manager','Criteria',true).'">';
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Filter',array('type'=>'select','options'=>$filterOptions,'label'=>false,'class'=>'form-control'));
            echo '</td>';                   
            echo '<td data-title="'.__d('report_manager','Example',true).'">';
            if ($attributes['type']=='date' || $attributes['type']=='datetime')
                $class = "datepicker";
            else
                $class = null;
            echo $this->Form->input($modelClass.'.'.$field.'.'.'Example',array('type'=>'text','label'=>false,'class'=>$class,'class'=>'form-control'));
            echo '</td>';          
            echo '</tr>';
            $i++;
        endforeach;
        ?>
        </table>
        </section>
    </fieldset>