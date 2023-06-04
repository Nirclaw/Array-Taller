<?php

$flotas = array(
    'Shadowhawk' => 'Asesino',
    'Nova Star' => 'Tanke',
    'Thunderstrike' => 'Heler',
    'Celestial Voyager' => 'Asesino',
    'Phoenix Rising' => 'Asesino',
    'Infinity Dawn' => 'Tanke',
    'Starfire' => 'Heler',  
    'Nebula Serpent' => 'Tanke',
    'Galactic Guardian' => 'Heler',
    'Quantum Eclipse' => 'Tanke'
);
$bucar=in_array($_POST['nave'],$flotas);


if($bucar){
    echo 'si hay en la flota';
}else{
    echo 'no hay en la flota';
}