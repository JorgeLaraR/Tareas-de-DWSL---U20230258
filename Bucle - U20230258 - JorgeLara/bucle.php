<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUCLE</title>
</head>
<body>
    <h2>Lista de empleados usando "FOR"</h2>
    <ol>
        <?php
        $empleados = ["Jorge", "Humberto", "Max", "Julian", "Sofia"];

        for ($i = 0; $i < count($empleados); $i++) {
            echo "<li>" . $empleados[$i] . "</li>";
        }
        ?>
    </ol>
</body>
</html>