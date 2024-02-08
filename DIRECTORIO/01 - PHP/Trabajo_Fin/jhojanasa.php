<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>
<body>
    <header>
        
        <h3 style="color: red">2.- FUNCION DE CADENA</h3>
    </header>
    <section>
        <form action="actividad.php" method="post">
        <?php 
        error_reporting(0);
        $Cadena1 = $_POST['txtDato1'] ?? '';
        $Cadena2 = $_POST['txtDato2'] ?? '';
        $SCadena = $_POST['selCadena'] ?? '';    
        $cadena = htmlspecialchars($_POST['txtCadena'] ?? '');
        
        if ($funcion == 'Strlen') {
            $selStrlen = 'selected';
        } else {
            $selStrlen = "";
        }
        
        if ($funcion == 'Strpos') {
            $selStrpos = 'selected';
        } else {
            $selStrpos = "";
        }
        
        if ($funcion == 'Strcmp') {
            $selStrcmp = 'selected';
        } else {
            $selStrcmp = "";
        }
        
        if ($funcion == 'Strstr') {
            $selStrstr = 'selected';
        } else {
            $selStrstr = "";
        }
        
        if ($funcion == 'Substr') {
            $selSubstr = 'selected';
        } else {
            $selSubstr = "";
        }
        
        if ($funcion == 'Ltrim' || $funcion == 'Rtrim' || $funcion == 'Chop' || $funcion == 'Trim') {
            $selTrimFunctions = 'selected';
        } else {
            $selTrimFunctions = "";
        }
        
        if ($funcion == 'Str_Replace') {
            $selStrReplace = 'selected';
        } else {
            $selStrReplace = "";
        }
        
        if ($funcion == 'Strtolower' || $funcion == 'Strtoupper') {
            $selCaseFunctions = 'selected';
        } else {
            $selCaseFunctions = "";
        }
        
        if ($funcion == 'Preg_Match') {
            $selPregMatch = 'selected';
        } else {
            $selPregMatch = "";
        }
        
        if ($funcion == 'Explode') {
            $selExplode = 'selected';
        } else {
            $selExplode = "";
        }
        
        if ($funcion == 'Strrev') {
            $selStrrev = 'selected';
        } else {
            $selStrrev = "";
        }
        
        if ($funcion == 'Str_Repeat') {
            $selStrRepeat = 'selected';
        } else {
            $selStrRepeat = "";
        }
        
        if ($funcion == 'Str_Pad') {
            $selStrPad = 'selected';
        } else {
            $selStrPad = "";
        }
        
        ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><h2>Ingrese la cadena: </h2></td>
                    <td>
                    <input type="text" name="txtCadena" value="<?php echo $cadena; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Seleccione una funcion para la cadena: </td>
                    <td>
                        <select name = "selCadena">
                        <option value="Strlen" <?php echo $selStrlen; ?>>Strlen</option>
                        <option value="Strpos" <?php echo $selStrpos; ?>>Strpos</option>
                        <option value="Strcmp" <?php echo $selStrcmp; ?>>Strcmp</option>
                        <option value="Strstr" <?php echo $selStrstr; ?>>Strstr</option>
                        <option value="Substr" <?php echo $selSubstr; ?>>Substr</option>
                        <option value="Ltrim" <?php echo $selTrimFunctions; ?>>Ltrim</option>
                        <option value="Rtrim" <?php echo $selTrimFunctions; ?>>Rtrim</option>
                        <option value="Chop" <?php echo $selTrimFunctions; ?>>Chop</option>
                        <option value="Trim" <?php echo $selTrimFunctions; ?>>Trim</option>
                        <option value="Str_Replace" <?php echo $selStrReplace; ?>>Str_Replace</option>
                        <option value="Strtolower" <?php echo $selCaseFunctions; ?>>Strtolower</option>
                        <option value="Strtoupper" <?php echo $selCaseFunctions; ?>>Strtoupper</option>
                        <option value="Preg_Match" <?php echo $selPregMatch; ?>>Preg_Match</option>
                        <option value="Explode" <?php echo $selExplode; ?>>Explode</option>
                        <option value="Strrev" <?php echo $selStrrev; ?>>Strrev</option>
                        <option value="Str_Repeat" <?php echo $selStrRepeat; ?>>Str_Repeat</option>
                        <option value="Str_Pad" <?php echo $selStrPad; ?>>Str_Pad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            
    </form>
</section>

<footer>
    <h6>Todos los derechos reservados @Jhojan@</h6>
</footer>
</body>
</html>