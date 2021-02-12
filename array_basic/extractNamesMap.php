<?php 
$persons = array(
    array(
        'name' => 'Paolo',
        'surname' => 'Verdi'
    ),
    [
        'name'=>'Mario',
        'surname'=>'Rossi'
    ],
    [
        'name'=>'Luigi',
        'surname'=>'Mario'
    ]
);


// Dichiarativo 
function extractName($item){
   return $item['name'];
}

$names = array_map('extractName',$persons);

print_r($names);