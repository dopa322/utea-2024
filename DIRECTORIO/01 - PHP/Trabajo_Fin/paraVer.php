<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de Funciones para Variables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        input, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Pruebas de Funciones para Variables</h1>

    <label for="variableInput">Ingrese una variable:</label>
    <input type="text" id="variableInput">

    <button onclick="testFunctions()">Probar Funciones</button>

    <h2>Resultados:</h2>
    <div id="results"></div>

    <script>
        function testFunctions() {
            var inputValue = document.getElementById('variableInput').value;
            var resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = '';

            // Función isset
            resultsDiv.innerHTML += '<p>isset: ' + (typeof inputValue !== 'undefined' && inputValue !== null) + '</p>';

            // Función unset - No se puede probar directamente en JavaScript

            // Función gettype
            resultsDiv.innerHTML += '<p>gettype: ' + typeof inputValue + '</p>';

            // Función settype - No se puede probar directamente en JavaScript

            // Función empty
            resultsDiv.innerHTML += '<p>empty: ' + (inputValue === '' || inputValue === 0 || inputValue === '0' || inputValue === null || inputValue === false || inputValue === undefined) + '</p>';

            // Función is_integer
            resultsDiv.innerHTML += '<p>is_integer: ' + Number.isInteger(Number(inputValue)) + '</p>';

            // Función is_double - No existe directamente en JavaScript, se puede usar Number.isFinite()

            // Función is_string
            resultsDiv.innerHTML += '<p>is_string: ' + (typeof inputValue === 'string') + '</p>';

            // Función var_dump - No existe directamente en JavaScript, se puede usar console.log()
            console.log(inputValue);
        }
    </script>
</body>
</html>
