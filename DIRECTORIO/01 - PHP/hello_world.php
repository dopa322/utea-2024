<?php
// hola mundo
echo "hola pape\n"; // EL echo para mostrar texto

/*este 
es un
comentario
*/

//variables 
$my_string = "esto es una cadena de texto";
echo $my_string . " wtf" . "\n"; // se usa el" . " para concatenar 

echo gettype($my_string). "\n"; // para saber que tipo de dato es 

// esto pude soportar un tipado dinamico
$my_string = 6;
echo $my_string. "\n";
echo gettype($my_string) . "\n";

//dandole nuevo valor
$my_string = "ESTO ES UNA CADENA DE TEXTO ";
echo $my_string;
echo "\n";
//NUMEROS ENTEROS 
$my_int = 7;
$my_int = $my_int + 4;

echo $my_int . "\n";
echo $my_int - 1 ."\n";
echo $my_int . "\n";

//double

$my_double = 6.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . "\n"; // se puede combinar numero entero con double 


//datos booleanos 
$my_bool = true;
echo $my_bool -1 . "\n"; 
echo gettype($my_bool) . "\n";

//interpolacion
echo "El valor de mi intiger es $my_int y el de mi boolen es $my_bool.\n"; // se pude poner todo en una cadena de texto

//constantes 

//palabra reservada
const MY_CONSTANT = "VALOR DE LA CONSTANTE";
echo MY_CONSTANT . "\n";


// Listas
$my_list = [$my_string, $my_int, $my_double];
echo gettype($my_list) . "\n";

echo "mostrar datos de la lista\n";
for($i = 0;$i<3;$i++){
    echo $i ." => ". $my_list[$i] . "\n";
}

//añadir datos a la lista 
array_push($my_list, $my_bool);//añadir datos a la lista 
print_r($my_list); // es para imprimir una lista 


// Diccionario

$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] .  "\n"; 


// set

array_push($my_list, "Brais");
array_push($my_list, "Brais");
print_r($my_list);

print_r(array_unique($my_list));

//flujos for y for each
for($index = 0; $index <= 10 ; $index++ ){
    echo $index . "\n";
}

foreach($my_list as $my_item) {
    echo $my_item . "\n";

}

//bucle while

$index = 0;
while($index < sizeof($my_list)){

    echo $my_list[$index] . "\n";
    $index++;
}

$my_int = 13;
$my_string = "hola";
if ($my_int == 11){
    echo "el valor es 11\n";
}elseif($my_int == 12 || $my_string == "hola"){
    echo "el valor es 12\n";
}else{
    echo "el valor no es 11\n";
}

// funciones
// se usa la palabra reservada
function print_number(int $my_number){ 
    echo $my_number . "\n";
}
print_number(9);
print_number(10);
print_number(12);

// creacion de clases

class MyClaas{
    public $my_name;
    public $my_age;

    //creacion de un constructor
     function __construct($my_name, $my_age){
        $this->my_name = $my_name;
        $this->my_age = $my_age;

    }
}
 //creando un odjeto

 $my_class = new MyClaas("dopa",23);

print_r($my_class); // imprimir datos del odjeto

echo $my_class -> my_name . "\n"; // accedemos a los parametros y lo imprimimos
echo $my_class -> my_name = "jean carlos\n" ;
echo gettype($my_class) . "\n";

?>