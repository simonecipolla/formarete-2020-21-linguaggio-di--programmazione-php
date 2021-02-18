<?php 
$persons = array(
    array(
        'name' => 'Paolo',
        'surname' => 'Verdi'
    ),
    [
        'name'=>'Mario',
        'surname'=>'Mario'
    ],
    [
        'name'=>'Luigi',
        'surname'=>'Mario'
    ]
);


// Dichiarativo 
// $item = $persons[$i]
function extractName($item){
   return $item['name'];
}

$filterMario = function ($person){
    return $person['surname']=='Mario';
};

//$a = 6;

// array.map(function(item){})
$names = array_map('extractName',$persons);
print_r($names);

$marios = array_filter($persons,function($person){
        return $person['surname']=='Mario';
});

$marios = array_filter($person,$filterMario);

print_r($marios);