<?php
$equipo = htmlspecialchars($_GET["equipo"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'src/widgets/libraries.php';
    ?>
    <title>Equipos | Team Infine</title>
</head>
<body>
    <?php
        include 'src/widgets/equipo_page.php';
    ?>
    <script src="src/js/menu.js"></script>
</body>
</html>