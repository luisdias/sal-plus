    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
    <fieldset>
        <legend><?php echo __d('report_manager','Report Style'); ?></legend>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="form-horizontal style-form">
                <?php
                $styleOptions = array(
                    'executive'=>'Executive',
                    'ledger'=>'Ledger',
                    'banded'=>'Banded',
                    'presentation'=>'Presentation',
                    'casual'=>'Casual'
                    );
                $outputOptions = array(
                    'html' => 'HTML',
                    'xls' => 'Excel'
                );

                echo '<div class="form-group">';
                echo '<label class="col-sm-2 col-sm-2 control-label">' . __d('report_manager','ReportName',true) . '</label>';
                echo $this->Form->input('Report.ReportName',array('maxlength'=>'80','label'=>false,'div'=>'col-sm-10','class'=>'form-control'));            
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label class="col-sm-2 col-sm-2 control-label">' . __d('report_manager','Style',true) . '</label>';
                echo $this->Form->input('Report.Style',array('type'=>'select','options'=>$styleOptions,'label'=>false,'div'=>'col-sm-10','class'=>'form-control'));            
                echo '</div>';

                echo '<div class="form-group">';
                echo '<label class="col-sm-2 col-sm-2 control-label">' . __d('report_manager','Output',true) . '</label>';
                echo $this->Form->input('Report.Output',array('type'=>'select','options'=>$outputOptions,'label'=>false,'div'=>'col-sm-10','class'=>'form-control'));            
                echo '</div>';

                
                if (isset($this->data['Report']['ShowRecordCounter']))
                    $showRecordCounter = $this->data['Report']['ShowRecordCounter'];
                else
                    $showRecordCounter = true; 
                
                echo '<div class="form-group">';
                echo '<label class="col-sm-2 col-sm-2 control-label">' . __d('report_manager','Show record counter',true) . '</label>'; 
                echo '<div class="col-sm-10">';
                echo $this->Form->checkbox('Report.ShowRecordCounter',array('hiddenField' => true,'checked'=>$showRecordCounter,'class'=>'form-control'));
                echo '</div>';                
                echo '</div>';

                if ($oneToManyOption != '') {
                    if (isset($this->data['Report']['ShowNoRelated']))
                        $showNoRelated = $this->data['Report']['ShowNoRelated'];
                    else
                        $showNoRelated = false;
                    
                    echo '<div class="form-group">';
                    echo '<label class="col-sm-2 col-sm-2 control-label">';
                    echo __d('report_manager','Show items with no related records');
                    echo '</label>';
                    echo '<div class="col-sm-10">';
                    echo $this->Form->checkbox('Report.ShowNoRelated',array('hiddenField' => true,'checked'=>$showNoRelated,'div'=>'col-sm-10','class'=>'form-control'));
                    echo '</div>';
                    echo '</div>';
                }
                
                if (isset($this->data['Report']['SaveReport']))
                    $saveReport = $this->data['Report']['SaveReport'];
                else
                    $saveReport = false; 
                
                echo '<div class="form-group">';
                echo '<label class="col-sm-2 col-sm-2 control-label">' . __d('report_manager','Save report',true) . '</label>';
                echo '<div class="col-sm-10">';
                echo $this->Form->checkbox('Report.SaveReport',array('hiddenField' => true,'checked'=>$saveReport,'class'=>'form-control'));
                echo '</div>';
                echo '</div>';
      
        ?>
                </div>
                </div>
            </div>
        </div>                   
    </fieldset>