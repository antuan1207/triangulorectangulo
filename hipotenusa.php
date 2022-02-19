<?php
$a = $_POST['a'];
$b = $_POST['b'];

$mensaje = "Hipotenusa: ";

$raiz;
$cuadrado;

$cuadrado = pow($a, 2) + pow($b, 2);
$raiz = sqrt($cuadrado);

echo "$mensaje $raiz";

?>