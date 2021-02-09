<?php

function sanitizeName($name,$date){
    // $date = new DateTime();
    $toLowecase = strtolower($name);
    $uppercaseName = ucfirst($toLowecase);
    // return $res;
    return $uppercaseName.$date->format('hh:ss');
}