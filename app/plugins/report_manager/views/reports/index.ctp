<?php
/*
Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
?>
<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/'); ?>";
</script>
<?php

?>

<?php echo $this->Html->script('/report_manager/js/index.js'); ?>
<div class="reportManager index">
    <h2><?php echo __d('report_manager','Report Manager',true);?></h2>
    <div class="row">        
        <div class="col-lg-6 col-md-6 col-sm-6 mb">
            <div class="grey-panel pn form-horizontal style-form">
            <?php
                echo "<div class=\"product-panel-2 pn\">";
                echo $this->Form->create();                
                echo '<div class="grey-header"><h5>' . __d('report_manager','New report',true) . '</h5></div>';
                echo "<h5>";
                echo __d('report_manager','Model',true);
                echo "</h5>";
                echo "<h5>";
                echo $this->Form->input('model',array(
                    'type'=>'select',            
                    'label'=>false,
                    'options'=>$models,
                    'empty'=>__d('report_manager','--Select--',true),
                    'class'=>'form-control'
                    ));
                echo "</h5>";
                             
                echo "<h5>";
                echo __d('report_manager','One to many option',true);
                echo "</h5>";
                echo "<h5>";
                echo $this->Form->input('one_to_many_option',array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>array(),
                    'empty'=>__d('report_manager','<None>',true),
                    'class'=>'form-control'
                    ));
                echo "</h5>";
                
                echo "<input type=\"hidden\" name=\"data[new]\" value=\"1\" id=\"new\">"; 
       
                echo "<h5>";
                echo $this->Form->submit(__d('report_manager','New',true),array('name'=>'new','class'=>'btn btn-primary','div'=>false));
                echo "</h5>";                
                echo $this->Form->end();
                echo "</div>"; 
            ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 mb">
            <div class="grey-panel pn form-horizontal style-form">
            <?php
                echo "<div class=\"product-panel-2 pn\">";
                echo $this->Form->create();
                echo '<div class="grey-header"><h5>' . __d('report_manager','Load report',true) . '</h5></div>';
                echo "<h5>";
                echo __d('report_manager','Saved reports',true);
                echo "</h5>";

                echo "<h5>";
                echo $this->Form->input('saved_report_option',array(
                    'type'=>'select',
                    'label'=>false,
                    'options'=>$files,
                    'empty'=>__d('report_manager','--Select--',true),
                    'class'=>'form-control'                    
                    ));
                echo '</h5>';
                
                echo '<input type="hidden" name="data[load]" value="1" id="load">';      
                
                echo "<h5>";                  
                echo '<button type="button" class="deleteReport btn btn-primary">' . __d('report_manager','Delete',true) . '</button>';
                echo "</h5>";  
                
                echo "<h5>";                                
                echo $this->Form->submit(__d('report_manager','Load',true),array('name'=>'load','class'=>'btn btn-primary','div'=>false));
                echo '</h5>';
                echo $this->Form->end();
                echo '</div>';
            ?>
            </div>
        </div>
    </div>
    
</div>