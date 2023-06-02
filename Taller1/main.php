<?php
echo '<br>', '<a href="index.html">Volver</a>';

$planetas = array('sol' => 0, 'Mercurio' => 1, 'Venus' => 2, 'Tierra' => 3, 'Marte' => 4, 'Júpiter' => 5, 'Saturno' => 6, 'Urano' => 7, 'Neptuno' => 8);

print_r(array_flip($planetas)[$_POST['numero']]);
?>