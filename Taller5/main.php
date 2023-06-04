<?php

$flotas = array(
    'Shadowhawk' => 150,
    'Nova Star' => 500,
    'Thunderstrike' => 300,
    'Celestial Voyager' => 750,
    'Phoenix Rising' => 200,
    'Infinity Dawn' => 400,
    'Starfire' => 250,  
    'Nebula Serpent' => 600,
    'Galactic Guardian' => 350,
    'Quantum Eclipse' => 450
);

function sumar($acumulador,$valor){
    return $acumulador + $valor;
}

$sum=array_reduce($flotas,'sumar');

var_dump($sum);