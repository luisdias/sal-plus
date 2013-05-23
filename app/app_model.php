<?php
/**
    SALPLUS - Sistema de Acompanhamento de Licitações e Contratos
    Copyright (C) 2013  Smartbyte - Luís E. S. Dias
    Contato : smartbyte.systems@gmail.com
 */

class AppModel extends Model {
    function dateFormatBeforeSave($dateString) {    
        $dateString = str_replace('/', '-', $dateString);
        return date('Y-m-d', strtotime($dateString)); 
    }
    function dateFormatAfterFind($dateString,$dateTimeFormat=false) {
        if ($dateTimeFormat)
            return date('d/m/Y  H:i:s', strtotime($dateString));            
        else
            return date('d/m/Y', strtotime($dateString));
    }    
}
