<?php
$torneo = htmlspecialchars($_GET["torneo"]);
$members = 0;
include 'src/php/conection.php';
            $sql = "SELECT integrantes FROM torneos WHERE id_torneo = ".$torneo;
            $result = $conn->query($sql);
            $json = array();
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $members = $row["integrantes"];
                }
            }
            $conn->close();
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
    <title>Team Infine</title>
</head>
<body>
    <?php
    include 'src/widgets/register_team_page.php';
    ?>
<script src="src/js/menu.js"></script>
</body>
</html>