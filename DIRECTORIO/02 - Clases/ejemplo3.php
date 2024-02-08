<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de casos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Listado de casos a desarrollar  en PHP</h3>
    </header>
    <section>
        <?php
            for ($i=1; $i <= 10 ; $i++) { 
        ?>
        <p>Caso <?php echo $i; ?></p>
        <?php
            }
        ?>
        
    </section>
    <footer>
        <h6>Todo los derechos reservados - Men Lee Hector</h6>
    </footer>
</body>
</html>