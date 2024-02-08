<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>FUNCIONES EN PHP</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td width = "150">ingrese un valor </td>
                <td><input type="text" name="valor1"></td>
            </tr>
        </table>
    <label for="variables">1) Funciones para Variables</label>

    <select name="variables" id="">
        <option disabled="">Seleccione una funcion</option>
        <option value="isset">isset</option>
        <option value="Unset">Unset</option>
        <option value="Gettype">Gettype</option>
        <option value="settype">settype</option>
        <option value="empty">empty</option>
        <option value="is_integer">is_integer</option>
        <option value="is_double">is_double</option>
        <option value="is_string">is_string</option>
        <option value="var_dump">var_dump</option>
    </select>
    <input type="submit" value="calcular">
    <br>
    </form>
  
    <?php
    error_reporting(0);

    switch($_POST['variables']){
        case "isset"
    }

        if($_POST['variables']=="isset"){
            
            if(isset ($_POST['valor1'])){
                
                $valor = $_POST['valor1'];
                if($valor == true){
                    echo "la variable esta definida, y es: " . $valor;
                }
                else{
                    echo "la variable no esta definida";
                }
            }
        }

        if($_POST['variables']=="Unset"){

                $valor = $_POST['valor1'];
                echo "Valor ingresado => ". $valor."<br>";
                echo "Se eliminara el valor ingresado <br>";
                unset($valor);
                echo "Valor ingresado => ". $valor."<br>";
                
                /*echo'<form action="" method="post">';
                echo'<label for="variables">desea eliminar el valor ingresado?  </label>';
                echo '<select name="opc" id="">
                 <option disabled="">Seleccione una funcion</option>
                 <option value="si">si</option>
                 <option value="no">no</option>
             </select>';
             echo '<input type="submit" value="elegir">';
             echo '</form>';

             /*if($_POST['opc']=="si"){

                unset($valor);
                echo "valor ingresado => ". $valor;
             }
             if($_POST['opc']=="no"){
                echo "valor ingresado => ". $valor;
             }*/
             
            }
        
        if($_POST['variables']=="Gettype"){
            $valor = $_POST['valor1'];
            echo "Valor ingresado => ". $valor."<br>";
            // Verificar el tipo de dato
                if (is_numeric($valor)) {
                    // Convertir a int para que gettype muestre "integer" para números enteros
                    $valorConvertido = (int)$valor;
                    echo "El valor ingresado es un número.<br> ";
                    echo "El tipo de dato del valor ingresado es: " . gettype($valorConvertido);
                } elseif (is_bool($valor)) {
                    echo "El valor ingresado es un booleano. <br>";
                    echo "El tipo de dato del valor ingresado es: " . gettype($valor);
                } elseif (is_string($valor)) {
                    echo "El valor ingresado es una cadena (string) <br> ";
                    echo "El tipo de dato del valor ingresado es: " . gettype($valor);
                } elseif (is_float($valor)|| is_double($valor)) {
                    // Convertir a float para que gettype muestre "double" para números decimales
                    $valorConvertido = (float)$valor;
                    echo "El valor ingresado es un número decimal (float).<br> ";
                    echo "El tipo de dato del valor ingresado es: " . gettype($valorConvertido);
                } else {
                    echo "El tipo de dato del valor ingresado es: " . gettype($valor);
                }
        }

        if($_POST['variables']=="settype"){
            $valor = $_POST['valor1'];
            echo "Valor ingresado => ". $valor."<br>";

            echo'<form action="" method="post">';
            echo'<label for="variables">Establece le tipo de la variable  </label>';
            echo '<select name="opc" id="">
                 <option disabled="">Seleccione una funcion</option>
                 <option value="boolean">boolean</option>
                 <option value="integer">integer</option>
                 <option value="float">float</option>
                 <option value="string">string</option>

             </select>';
             echo '<input type="submit" value="elegir">';
             //echo '</form>';
             echo '</form>';

             //$opc = $_POST['opc'];
             if(isset($_POST['opc'])){
             if($_POST['opc']=="boolean"){

                settype($valor, 'bool');
                echo "Tipo después de convertir a boolean: " . gettype($valor) . "<br>";

             }
             else if($_POST['opc']=="integer"){
                settype($valor, 'int');
                echo "Tipo después de convertir a entero: " . gettype($valor) . "<br>";
                
             }

             if($_POST['opc']=="float"){

                settype($valor, 'float');
                echo "Tipo después de convertir a float: " . gettype($valor) . "<br>";
             }

             if($_POST['opc']=="string"){
                settype($valor, 'string');
                echo "Tipo después de convertir a cadena: " . gettype($valor) . "<br>";
             }
            }
    }
    
        ?>

        

</body>
</html>