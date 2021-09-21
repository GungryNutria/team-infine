<header class="header-tournament">
    <div class="overlay">
    <center>
    <?php
    include 'menu.php';
    ?>
    <section class="section-header-tournament">
    <?php
            include 'src/php/conection.php';
            $sql = "SELECT id_torneo,torneo,descripcion,dia,hora,premio,integrantes,equipos,imagen FROM torneos WHERE id_torneo = ".$torneo;
            $result = $conn->query($sql);
            $json = array();
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '<div class="row-1" style="background-image: url(src/assets/imagenes/torneos-banners/'.$row["imagen"].'.jpg);">';
                    echo '<h1>'.$row["torneo"].'</h1>';
                    echo '<p>'.$row["dia"].'</p>';
                    echo '</div>';
                    echo '<div class="row-2">';
                    echo '<div class="column"><img src="src/assets/imagenes/halo-logo.png" alt=""></div>';
                    echo '<div class="column"><a href="register_team?torneo='.$row["id_torneo"].'&members='.$row["integrantes"].'">Registrate</a></div>';
                    echo '</div>';
                    echo '<hr>';
                    echo '<div class="row-3">';
                    echo '<div class="column-4-description">';
                    echo '<h2>Sobre el Torneo</h2>';
                    echo '<br>';
                    echo '<p>'.$row["descripcion"].'</p>';
                    echo '</div>';
                    echo '<div class="column-4">';
                    echo '<div>';
                    echo '<p>Integrantes</p>';
                    echo '<p  class="value">'.$row["integrantes"].'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="column-4">';
                    echo '<div>';
                    echo '<p>Equipos</p>';
                    echo '<p class="value">'.$row["equipos"].'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="column-4">';
                    echo '<div>';
                    echo '<p>Premio</p>';
                    echo '<p class="value">'.$row["premio"].'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            $conn->close();
            ?>
    </section>
    </center>
    </div>
</header>
<center>
<section class="tournament-teams-container">
    <h1>Equipos Registrados</h1>
    <br><br>
    <div class="tournament-teams">
            
    </div>
</section>
        </center>