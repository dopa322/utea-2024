<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

        <h1>FUNCIONES EN PHP</h1>
    </header>

    <section>

        <form action="trabajo01.php" method="post">
            <?php
            //error_reporting(0);
            $valor = $_POST['valor1']??null;
            $variable = $_POST['variables'] ??null;
            if ($variable=='isset') {
                $sel_isset ='SELECTED';
            } else{
                $sel_isset ="";
            }

            if ($variable=='Unset') {
                $sel_Unset ='SELECTED';
            } else{
                $sel_Unset ="";
            }

            if ($variable=='Gettype') {
                $sel_Gettype ='SELECTED';
            } else{
                $sel_Gettype ="";
            }

            if ($variable=='settype') {
                $sel_settype ='SELECTED';
            } else{
                $sel_settype ="";
            }
            ?>
            <table>
                <tr>
                    <td width = "150">ingrese un valor </td>
                    <td><input type="text" name="valor1"></td>
                </tr>
            </table>
            <label for="variables">1) Funciones para Variables</label>
            
            <select name="variables" >
                <option disabled="">Seleccione una funcion</option>
                <option value="isset" <?php echo $sel_isset ?>>isset</option>
                <option value="Unset" <?php echo $sel_Unset ?>>Unset</option>
                <option value="Gettype" <?php echo $sel_Gettype ?>>Gettype</option>
                <option value="settype" <?php echo $sel_settype ?>>settype</option>
                <option value="empty">empty</option>
                <option value="is_integer">is_integer</option>
                <option value="is_double">is_double</option>
                <option value="is_string">is_string</option>
                <option value="var_dump">var_dump</option>
            </select>
            <input type="submit" value="calcular">
            <input type="hidden" name="tipo_elegido" value="">
            <br>
        </form>
        
        <?php
    //error_reporting(0);
    
    
    
    switch($variable){
        case "isset":
            if(isset ($valor)){
                
                
                if($valor == true){
                    echo "la variable esta definida, y es: " . $valor;
                }
                else{
                    echo "la variable no esta definida";
                }
            }
            break;
            
            case "Unset":
                
                
                echo "Valor ingresado => ". $valor."<br>";
                echo "Se eliminara el valor ingresado <br>";
                unset($valor);
                echo "Valor ingresado => ". $valor."<br>";
                
                break;
                
                case "Gettype":
                   
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
                    
                    break;
                    

                    case "settype":
                        echo "Valor ingresado => ". $valor."<br>";
                        
                        $opc = $_POST['opc'];
                        if ($opc == 'boolean') {
                            $sel_boolean ='SELECTED';
                        }else{
                            $sel_boolean ="";
                        }
                        
                        echo'<form action="trabajo01.php" method="post" name="miFormulario">';
                        echo'<label for="variables">Establece le tipo de la variable  </label>';
                        echo '<select name="opc" >
                        <option disabled="">Seleccione una funcion</option>
                        <option value="boolean"<?php echo $sel_boolean ?>>boolean</option>
                        <option value="integer">integer</option>
                        <option value="float">float</option>
                        <option value="string">string</option>
                        </select>';
                        echo '<input type="submit" value="elegir">';
                        
                        echo '</form>';
                        //$opc = $_POST['opc'];
                        
                        if($opc=="boolean"){
                            
                            settype($valor, 'bool');
                            echo "Tipo después de convertir a boolean: " . gettype($valor) . "<br>";
                            
                        }
                        if($opc=="integer"){
                            settype($valor, 'int');
                            echo "Tipo después de convertir a entero: " . gettype($valor) . "<br>";
                            
                        }
                        
                        if($opc=="float"){
                            
                            settype($valor, 'float');
                            echo "Tipo después de convertir a float: " . gettype($valor) . "<br>";
                        }
                        
                        if($opc=="string"){
                            settype($valor, 'string');
                            echo "Tipo después de convertir a cadena: " . gettype($valor) . "<br>";
                        }
                        
                        
                        break;


                        
                    }
                    
                    
                    
                    ?>



</section>
</body>
</html>