<?php
// Il comando php ... viene eseguito dalla root del progetto
require 'case_study/sanitizeName/sanitizeName.php';
// require './sanitizeName.php';

$dataset = [
    ['mario','Mario',__LINE__],
    ['mAriO','Mario',__LINE__],
    ['MARIO','Mario',__LINE__],
    ['De giovanni','De Giovanni',__LINE__],
    ['Mario83','Mario',__LINE__],
    ['Mario@','Mario',__LINE__],
];

foreach ($dataset as $row) {

        $text = $row[0];
        $atteso = $row[1];
        $linea = $row[2];

        $result = sanitizeName($text);
        
        if($result == $atteso){
            echo "PASS - tutto ok \n";
        }else{
            echo "FAIL - test fallito $linea \n";
        }

    
}