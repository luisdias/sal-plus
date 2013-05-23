    <!-- Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br -->
    <fieldset>
        <legend><?php echo __d('report_manager','Report Style'); ?></legend>
        <table class="reportManagerReportStyleSelector" cellpadding="0" cellspacing="0">
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
        
            echo '<tr>';
            echo '<td>';
            echo $this->Form->input('Report.ReportName',array('size'=>'80','maxlength'=>'80','label'=>__d('report_manager','ReportName',true)));            
            echo '</td>';
            echo '</tr>';
            
            echo '<tr>';
            echo '<td>';
            echo $this->Form->input('Report.Style',array('type'=>'select','options'=>$styleOptions,'label'=>__d('report_manager','Style',true)));            
            echo '</td>';             
            echo '</tr>';

            echo '<tr>';
            echo '<td>';
            echo $this->Form->input('Report.Output',array('type'=>'select','options'=>$outputOptions,'label'=>__d('report_manager','Output',true)));            
            echo '</td>';             
            echo '</tr>';
            
            echo '<tr>';
            echo '<td>';
            echo __d('report_manager','Show record counter');
            if (isset($this->data['Report']['ShowRecordCounter']))
                $showRecordCounter = $this->data['Report']['ShowRecordCounter'];
            else
                $showRecordCounter = true;
            echo $this->Form->checkbox('Report.ShowRecordCounter',array('hiddenField' => true,'checked'=>$showRecordCounter));                     
            echo '</td>';             
            echo '</tr>';            
            
            if ($oneToManyOption != '') {
                echo '<tr>';
                echo '<td>';
                echo __d('report_manager','Show items with no related records');
                if (isset($this->data['Report']['ShowNoRelated']))
                    $showNoRelated = $this->data['Report']['ShowNoRelated'];
                else
                    $showNoRelated = false;
                echo $this->Form->checkbox('Report.ShowNoRelated',array('hiddenField' => true,'checked'=>$showNoRelated));
                echo '</td>';             
                echo '</tr>';
            }
            
            echo '<tr>';
            echo '<td>';
            echo __d('report_manager','Save report');
            if (isset($this->data['Report']['SaveReport']))
                $saveReport = $this->data['Report']['SaveReport'];
            else
                $saveReport = false;            
            echo $this->Form->checkbox('Report.SaveReport',array('hiddenField' => true,'checked'=>$saveReport));                     
            echo '</td>';             
            echo '</tr>';            
      
        ?>
        </table>
    </fieldset>