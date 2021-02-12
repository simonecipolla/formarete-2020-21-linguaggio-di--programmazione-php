<?php 

// in_array()

$names = ['Mario','Luigi','Paolo'];

// c'è Mario ?


/**
 * questa funzione cerca un nome 
 */
function findName(string $nameTofind,array $names):bool
{ 
    // $find = false;
    foreach ($names as $name) {
        if($name == $nameTofind){
            return true;
        }
    }
    return false;
}

var_dump(findName('Mario',$names));
var_dump(in_array('Mario',$names));