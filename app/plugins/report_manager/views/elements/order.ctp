    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
    <fieldset>
        <legend><?php echo $modelClass; ?></legend>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="form-horizontal style-form">
                    <?php
                    foreach ($modelSchema as $field => $attributes): 
                        echo '<div class="form-group">';
                        echo '<label class="col-sm-2 col-sm-2 control-label">' . 
                        ( isset($labelFieldList[$modelClass][$field]) ? 
                                $labelFieldList[$modelClass][$field] : 
                            ( isset($labelFieldList['*'][$field]) ? $labelFieldList['*'][$field] : $field ))
                        . '</label>';            

                        echo $this->Form->input($modelClass.'.'.$field.'.'.'OrderBy1',
                                array('name'=>'data[Report][OrderBy1]',
                                    'legend'=>false,
                                    'label'=>'1',
                                    'type'=>'radio',
                                    'default'=>( isset($this->data['Report']['OrderBy1']) && $this->data['Report']['OrderBy1'] == $modelClass.'.'.$field ? $modelClass.'.'.$field : ''),
                                    'hiddenField' => false,
                                    'div'=>'col-sm-5',
                                    'class'=>'form-control',
                                    'options'=>array($modelClass.'.'.$field => ''))
                                );

                        echo $this->Form->input($modelClass.'.'.$field.'.'.'OrderBy2',
                                array('name'=>'data[Report][OrderBy2]',
                                    'legend'=>false,
                                    'label'=>'2',
                                    'type'=>'radio',
                                    'default'=>( isset($this->data['Report']['OrderBy2']) && $this->data['Report']['OrderBy2'] == $modelClass.'.'.$field ? $modelClass.'.'.$field : ''),
                                    'hiddenField' => false,
                                    'div'=>'col-sm-5',
                                    'class'=>'form-control',                        
                                    'options'=>array($modelClass.'.'.$field => ''))
                                );
                        echo '</div>';
                    endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>