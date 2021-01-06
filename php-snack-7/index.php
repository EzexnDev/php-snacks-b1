<?php

$array = [
    0 => [
        'nome' => 'Gianmarco',
        'cognome' => 'Cavaliere',
        'voti' => [6, 9, 3]
    ],
    1 => [
        'nome' => 'Franco',
        'cognome' => 'Mastrotti',
        'voti' => [6, 8, 6]
    ],
    2 => [
        'nome' => 'Giulia',
        'cognome' => 'Perenni',
        'voti' => [4, 6, 2]
    ],
    3 => [
        'nome' => 'Mario',
        'cognome' => 'Salti',
        'voti' => [4, 6, 9]
    ],
    4 => [
        'nome' => 'Giulio',
        'cognome' => 'Gamberri',
        'voti' => [2, 2, 2]
    ],
];

for ($i = 0; $i < count($array); $i++) {

    
    $average = array_sum($array[$i]['voti'])/count($array[$i]['voti']);
    
    echo '<li>'.$array[$i]['nome']."\n".$array[$i]['cognome'].' - '.$average.'</li>';
    
};


?>
