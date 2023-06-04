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
$aleatorio= array_rand($flotas);



echo $aleatorio;
//foreach ($aleatorio as $key => $value) {
  // echo "nave $value"." <br>";
//}