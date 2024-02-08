<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASA DE CAMBIO</title>
    <style>
        header {
            text-align: center;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color: blueviolet;">CASA DE CAMBIO</h1>
    </header>
    
    <!-- ponemos el formulario -->
    <form action="cambiov1.php" method="post">
        <table>
            <tr>
                <td width="200">Monto en soles a cambiar =></td>
                <td><input type="text" name="Msoles"></td>
            </tr>
            <tr>
                <td>Precio del dólar hoy =></td>
                <td><input type="text" name="Mdolares"></td>
            </tr>
            <tr>
                <td>Precio del euro hoy =></td>
                <td><input type="text" name="Meuros"></td>
            </tr>
            <tr>
                <td><input type="submit" name="procesar" value="Procesar"></td>
                <td><input type="reset" name="limpiar" value="Limpiar"></td>
            </tr>
        </table>

        <?php
            // Validar si el formulario ha sido enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $soles = isset($_POST['Msoles']) ? floatval($_POST['Msoles']) : 0;
                $dolares = isset($_POST['Mdolares']) ? floatval($_POST['Mdolares']) : 1;
                $euros = isset($_POST['Meuros']) ? floatval($_POST['Meuros']) : 1;

                // Calcular conversiones
                $camSoles = $soles;
                $camDolar = $camSoles / $dolares;
                $camEuros = $camSoles / $euros;

                // Mostrar resultados
                echo '<table>';
                echo '<tr><td>Total soles</td><td>S/. ' . number_format($camSoles, 2) . '</td></tr>';
                echo '<tr><td>Total dólares</td><td>$ ' . number_format($camDolar, 2) . '</td></tr>';
                echo '<tr><td>Total euros</td><td>' . number_format($camEuros, 2) . ' EUR</td></tr>';
                echo '</table>';
            }
        ?>
    </form>

    <footer>
        <h5>Todos los derechos reservados para @Jean Carlos</h5>
    </footer>
</body>
</html>
