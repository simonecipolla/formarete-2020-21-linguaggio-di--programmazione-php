<?php
// Il comando php ... viene eseguito dalla root del progetto
require 'case_study/sanitizeName/sanitizeName.php';
// require './sanitizeName.php';

$dataset = [
    ['mario','Mario'],
    ['mAriO','Mario'],
    ['MARIO','Mario'],
    ['De giovanni','De Giovanni'],
    ['Mario83','Mario'],
    ['Mario@','Mario'],
];

foreach ($dataset as $row) {

        $text = $row[0];
        $atteso = $row[1];
        $linea = $row[2];

        $result = sanitizeName($text);
        
        if($result == $atteso){
            echo "PASS - tutto ok \n";
        }else{
            echo "FAIL - test fallito  \n";
        }

    
}