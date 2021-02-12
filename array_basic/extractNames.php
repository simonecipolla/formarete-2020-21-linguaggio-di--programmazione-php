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
// imperativo
// ["Paolo","Mario","Luigi"];
$names = [];
foreach ($persons as $person) {
    $names[] = $person['name'];
}
