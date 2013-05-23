<?php 
/** 
* DatePicker Helper 
* Used with Dynarch Calendar JSCal2 and CakePHP 1.3 
* Based on the helper by Nik Chankov http://nik.chankov.net 
* 
* @author  Christakis Mina 
* @email   minatsu@gmail.com 
* @version 1.0.0 
*/ 

uses('view/helpers/Form'); 
class DatePickerHelper extends FormHelper { 
    
    var $format = '%d-%m-%Y'; //'%Y-%m-%d'; 
    
    /** 
     *Setup the format if exist in Configure class 
     */ 
    function _setup(){ 
        $format = Configure::read('DatePicker.format'); 
        if($format != null){ 
            $this->format = $format; 
        } 
    } 
    
    /** 
    * The Main Function - picker 
    * 
    * @param string $field Name of the database field. Possible usage with Model. 
    * @param array $options Optional Array. Options are the same as in the usual text input field. 
    */     
    function picker($fieldName, $options = array()) { 
        $this->_setup(); 
        $this->setEntity($fieldName); 
        $htmlAttributes = $this->domId($options);         
        $divOptions['class'] = 'date'; 
        $options['type'] = 'text'; 
        $options['maxlength'] = '255'; 
        $options['size'] = '10'; 
        //$options['readonly'] = 'readonly'; 
        //$options['div']['class'] = 'formfield'; 
        $options['div']['class'] = 'input'; 
        $options['after'] = $this->Html->image('calendar.png', array('id' => $fieldName.'-trigger')).'<script> Calendar.setup({trigger: "'.$fieldName.'-trigger", inputField: "'.$htmlAttributes['id'].'", onSelect   : function() { this.hide() } }); </script>'; 
        return $this->input($fieldName, $options); 
    } 
     
} 
?>