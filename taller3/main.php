<?php

$sistemaSolar = array('sol' => "Deshabitado", 'Mercurio' => 'Deshabitado', 'Venus' => 'Deshabitado', 'Tierra' => "Habitable", 'Marte' => 'Habitable', 'Júpiter' => 'Deshabitado', 'Saturno' => 'Deshabitado', 'Urano' => 'Deshabitado', 'Neptuno' => 'Deshabitado');


function habi($Habitable)
{
    return $Habitable == 'Habitable';
};


print_r(array_filter($sistemaSolar, 'habi'));
echo'<a href="index.html">Volver</a>','<br>';

