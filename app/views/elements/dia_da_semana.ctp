<?php
    $str_dia_da_semana = "indefinido";
    switch($int_dia_da_semana) {
            case"1": $str_dia_da_semana = "Domingo";       break;
            case"2": $str_dia_da_semana = "Segunda-Feira"; break;
            case"3": $str_dia_da_semana = "Terça-Feira";   break;
            case"4": $str_dia_da_semana = "Quarta-Feira";  break;
            case"5": $str_dia_da_semana = "Quinta-Feira";  break;
            case"6": $str_dia_da_semana = "Sexta-Feira";   break;
            case"7": $str_dia_da_semana = "Sábado";        break;
    }                                                
    echo $str_dia_da_semana;
?>