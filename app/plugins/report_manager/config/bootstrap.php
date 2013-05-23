<?php
$config['ReportManager.displayForeignKeys'] = 0;
$config['ReportManager.globalFieldIgnoreList'] = array(
    'id',
    'created',
    'modified',
    'modified_by'
);
$config['ReportManager.modelIgnoreList'] = array(
    'AppModel',
    'MyModel2'
);
$config['ReportManager.modelFieldIgnoreList']=array(
    'MyModel' => array(
        'field1'=>'field1',
        'field2'=>'field2',
        'field3'=>'field3'
    )
);
$config['ReportManager.reportPath'] = 'tmp'.DS.'reports'.DS;

$config['ReportManager.labelFieldList']=array(
    '*' => array(
        'title'=>'descrição',
        'name'=>'nome',
        'field3'=>'my field 3 label description'
    ),
    'MyModel' => array(
        'field1' => 'my MyModel field 1 label description'
    )
);

?>