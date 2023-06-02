<?php
$planetas = array(
    'sol' => 274,
    'Mercurio' => 3.7,
    'Venus' => 8.87,
    'Tierra' => 9.81,
    'Marte' => 3.71,
    'Júpiter' => 24.79,
    'Saturno' => 10.44,
    'Urano' => 8.87,
    'Neptuno' => 11.15
);
define('GRAVITACIONUNIVERSAL',6.67430);

function gravedad($gravedad){

    return $gravedad * 9.8;


};

print_r(array_map('gravedad',$planetas));

