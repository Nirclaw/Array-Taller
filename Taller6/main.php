<?php

$planetas = array('sol' => 0, 'Mercurio' => 1, 'Venus' => 2, 'Tierra' => 3, 'Marte' => 4, 'Júpiter' => 5, 'Saturno' => 6, 'Urano' => 7, 'Neptuno' => 8);


if(array_key_exists($_POST['planeta'],$planetas)){
    echo 'si existe';
}else{
    echo 'no existe el planeta';
}
echo'<a href="index.html">Volver</a>','<br>';

?>