<?php
$planetas = ['Mercurio', 'Venus', 'Tierra', 'Marte', 'Júpiter', 'Saturno', 'Urano', 'Neptuno'];
$planetas2 = ['Alderaan', 'Marte', 'Hoth', 'Tierra', 'Saturno', 'Kashyyyk', 'Endor', 'Neptuno'];



$similutudes=array_intersect($planetas,$planetas2);

print_r($similutudes);