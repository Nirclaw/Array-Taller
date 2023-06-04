<?php
$satelites=array();
session_start($satelites);



array_push($satelites,$_POST);
print_r($satelites);

echo'<a href="index.html">Volver</a>','<br>';


