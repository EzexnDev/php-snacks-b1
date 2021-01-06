<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$list = '';
$pmList = '';

for ($i = 0; $i < count($db['teachers']); $i++) {

   $list .= '<li>'.(implode(' ', $db['teachers'][$i])).'</li>';

};

echo "<div style='background-color:green; height:100px; width:150px;'>$list</div>";

for ($i = 0; $i < count($db['pm']); $i++) {

    $pmList .= '<li>'.(implode(' ', $db['pm'][$i])).'</li>';
 
 };
 
 echo "<div style='background-color:grey; height:100px; width:150px;'>$pmList</div>";
        
?>



