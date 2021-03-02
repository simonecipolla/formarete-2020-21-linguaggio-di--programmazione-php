<?php 
/**
 * @var $expected    Valore atteso per superare il test
 * @var $actual      Valore da confrontare con quello atteso
 * @var $description Descrizione facoltativa del test
 * @var $line        Possibiità di indicare la linea di codice del test interessato
 */
function assertEquals($expected,$actual,$description = '',$line ='')
{

    if($expected === $actual)
    {
        echo "PASS | $description \n";
        echo "atteso: $expected (".gettype($expected).")\n";
        echo "ottenuto: $actual (".gettype($actual).") \n";
        echo $line ? "line: $line \n" : "\n";

    } else {

        echo "FAIL | $description \n";
        echo "atteso: $expected (".gettype($expected).")\n";
        echo "ottenuto: $actual (".gettype($actual).") \n";
        echo $line ? "line: $line \n" : "\n";
        
    }
}