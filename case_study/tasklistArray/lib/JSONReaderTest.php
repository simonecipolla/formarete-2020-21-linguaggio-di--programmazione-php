<?php
declare(strict_types=1);

system("clear");


require "./JSONReader.php";
$dataset = [
    [
        'filepath' => './ciccio.json',
        'error' => 'not-exists',
        'errorCode' => 404
    ],
    [
        'filepath' => '../dataset/TaskList.json',
        'type' => 'array',
        'count' => 20
    ],
    [
        'filepath' => '../dataset/TaskList-error.json',
        'error' => 'syntax-error',
        'errorCode' => 123
    ],
    [
        'filepath' => '../dataset/TaskList-zero.json',
        'type' => 'array',
        'count' => 0
    ],

];

foreach ($dataset as $row) {

    try {
        
        $filepath = $row['filepath'];
        $actual = JSONReader($filepath);
        
        if (isset($row['type']))
        {
            $type = $row['type'];
            var_dump(gettype($actual) === $type);
            var_dump(count($actual) === $row['count']);
        }
    
    } catch (Exception $e) {
        var_dump($e->getMessage() === $row['error']);
        var_dump($e->getCode() === $row['errorCode']);
        
    }

    



    
}
