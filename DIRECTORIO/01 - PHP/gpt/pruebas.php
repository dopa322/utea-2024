<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
    <style>
        /* Agrega estilos CSS aquí */
        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h3>2.- FUNCION DE CADENA</h3>
    </header>
    <section>
        <form action="actividad.php" method="post">
            <?php 
            error_reporting(0);
            // Tu código PHP para manejar datos

            // Ejemplo de simplificación del código de selección
            $funciones = ['Strlen', 'Strpos', 'Strcmp', 'Strstr', 'Substr', 'Ltrim', 'Rtrim', 'Chop', 'Trim', 'Str_Replace', 'Strtolower', 'Strtoupper', 'Preg_Match', 'Explode', 'Strrev', 'Str_Repeat', 'Str_Pad'];

            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><h2>Ingrese la cadena: </h2></td>
                    <td>
                        <input type="text" name="txtCadena" value="<?php echo htmlspecialchars($cadena); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Seleccione una función para la cadena: </td>
                    <td>
                        <select name="selCadena">
                            <?php
                            foreach ($funciones as $func) {
                                $selected = ($func == $SCadena) ? 'selected' : '';
                                echo "<option value=\"$func\" $selected>$func</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <h6>Todos los derechos reservados @Jhojan@</h6>
    </footer>
</body>
</html>
