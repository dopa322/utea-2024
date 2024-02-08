<?php

//llamar a una clase ubicada en otro archivo
    require_once "01.php";



//creamos odjetos

$goku = new saya("goku",2000);
//var_dump($goku);

echo $goku->saludar("hola soy") ; //es la forma de llamar al metodo y pasar un parametro

echo "<br>";

echo $goku->nivelPelea();
echo "<br>";
echo "<br>";

$vegeta = new saya("vegeta",1800);
echo $vegeta->saludar("mi name is "); // le pasamos ese valor al parametro $texto
echo "<br>";

echo $vegeta->nivelPelea();
