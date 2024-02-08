<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
            <h1 style="color:blueviolet">CASA DE CAMBIO</h1>
        
    </header>
    <img src="https://kom.pe/wp-content/uploads/2021/06/dls-money-casa-de-cambio-las-mejores-paginas-web-en-peru-por-rubros-diseno-seo-.png" alt=" imagen de casa de cambio" width="600">
    <br>
    <br>
    <!-- ponemos el formulario -->
    <form action="cambio.php" method="post">
        <?php
       error_reporting(0);
 

        ?>
        <table>
            <tr>

                <td width="200">Monto en soles a cambiar =></td>
                <td><input type="text" name="Msoles" required=""></td>
            </tr>
            <tr>
                <td>Precio del dolar hoy =></td>
                <td><input type="text" name="Mdolares" required=""></td>
            </tr>
            <tr>
                <td>Precio del euro hoy =></td>
                <td><input type="text" name="Meuros" required=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="procesar" value="Procesar"></td> 
              
                <!-- <td><button>Procesar</button> </td> -->
                <td><input type="reset" name="limpiar" value="Limpiar"></td>
                
            </tr>
          <?php
                $soles = $_POST['Msoles'];
                $dolares = $_POST['Mdolares'] ;
                $euros = $_POST['Meuros'];

                //cambios
                $camSoles = $soles;
                $camDolar = $camSoles / $dolares;
                $camEuros = $camSoles / $euros ;
          ?>
          <tr>
                <td >Total soles</td>
                <td>
                    <?php
                    printf("S/ %.2f", $camSoles)
                    ?>
                </td>
            </tr>
            <tr>
                <td>Total dolares</td>
                <td>
                    <?php
                    printf("$ %.2f", $camDolar);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Total euros</td>
                <td>
                    <?php
                    printf("%.2f euros", $camEuros)
                    ?>
                </td>
            </tr>

        </table>
        </form>
        

    <footer>
        
        <h5>todos los derecho reservados para @jean carlos </h5>
        
    </footer>
    
</body>
</html>