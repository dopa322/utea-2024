<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Poder ver el nivel de pelea</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>Nombre del heroe 1: </td>
            <td><input type="text" name="nombre" placeholder="nombre" required></td>
          
        </tr>
        <tr>
            <td>Nivel de pelea</td>
            <td><input type="text" name="nivel" placeholder="nivel" required></td>
        </tr>
     
      
        <tr>
            <td>Nombre de heroe 2: </td>
            <td><input type="text" name="nombre2" placeholder="nombre" required></td>
        </tr>
        <tr>
            <td>Nivel de pelea</td>
            <td><input type="text" name="nivel2" placeholder="nivel" required></td><br>
        </tr>
        
        <tr>
            <td>Nombre de heroe 3: </td>
            <td><input type="text" name="nombre3" placeholder="nombre" required></td>
        </tr>
        <tr>
            <td>Nivel de pelea</td>
            <td><input type="text" name="nivel3" placeholder="nivel" required></td>
        </tr>
        <tr>
            <td><button type="submit">enviar</button></td>
            <td><input type="reset" name="limpiar" value="limpiar"></td>
        </tr>
       
    </table>
    
    
  
    </form>
    <?php
    error_reporting(0);
    //llamar a una clase ubicada en otro archivo
    require_once "01.php";

    //creamos odjetos
    echo '<br>';
    $goku = new saya($_POST['nombre'], $_POST['nivel']);
    //var_dump($goku);

    echo $goku->saludar("hola soy "); //es la forma de llamar al metodo y pasar un parametro

    echo "<br>";

    echo $goku->nivelPelea();
    echo "<br>";
    echo "<br>";

    $vegeta = new saya($_POST['nombre2'], $_POST['nivel2']);
    echo $vegeta->saludar("mi name is "); // le pasamos ese valor al parametro $texto
    echo "<br>";

    echo $vegeta->nivelPelea() . "<br>" . "<br>";


    $pingoro = new saya($_POST['nombre3'], $_POST['nivel3']);

    echo $pingoro->saludar("que fue, soy ") . "<br>";

    echo $pingoro->nivelPelea().'<br>'.'<br>';

    $nivel1 = $_POST['nivel'];
    $nivel2 = $_POST['nivel2'];
    $nivel3 = $_POST['nivel3'];

    if($nivel1 > $nivel2 && $nivel1 > $nivel3){
        echo $_POST['nombre']." es el mas fuerte".'<br>';
        echo 'su nivel de pelea es de '.$nivel1;
    }
    elseif($nivel2 > $nivel1 && $nivel2 > $nivel3){
        echo $_POST['nombre2']." es el mas fuerte".'<br>';
        echo 'su nivel de pelea es de '.$nivel2;
    }
    else{
        echo $_POST['nombre3']." es el mas fuerte".'<br>';
        echo 'su nivel de pelea es de '.$nivel3;
    }
    ?>

</body>

</html>