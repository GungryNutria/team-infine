<header class="tournament-background">
    <div class="overlay">
    <?php
    include 'menu.php';
    ?>
    <section class="header-body-center">
        <h1>NUESTROS TORNEOS</h1>
        <br>
        <P>Aqui podras encontrar algunos de nuestros torneos y registrarte para participar en ellos</P>
    </section>
    </div>
</header>
<center>
<section class="tournaments-container">
    <h1>Proximos Torneos</h1>
    <br><br>
    <div class="tournaments">
    <?php
            include 'src/php/conection.php';
            $sql = "SELECT id_torneo,torneo,dia,hora,premio,integrantes,equipos,imagen FROM torneos;";
            $result = $conn->query($sql);
            $json = array();
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '<div class="tournament-container" style="background-image: url(src/assets/imagenes/torneos-banners/'.$row["imagen"].'.jpg);">';
                    echo '<div class="tournament">';
                    echo '<div class="col-12">';
                    echo '<h1>'.$row["torneo"].'</h1>';
                    echo '<p>'.$row["dia"].'</p>';
                    echo '<br>';
                    echo '<img src="src/assets/imagenes/halo-logo.png" width="100px">';
                    echo '</div>';
                    echo '<div class="col-3">';
                    echo '<p>Integrantes</p>';
                    echo '<p class="value">'.$row["integrantes"].'</p>';
                    echo '</div>';
                    echo '<div class="col-3">';
                    echo '<p>Equipos</p>';
                    echo '<p class="value">'.$row["equipos"].'</p>';
                    echo '</div>';
                    echo '<div class="col-3">';
                    echo '<p>Premio</p>';
                    echo '<p class="value">'.$row["premio"].'</p>';
                    echo '</div>';
                    echo '<div class="col-3-orange">';
                    echo '<p><a href="torneo?torneo='.$row["id_torneo"].'">Leer mas</a> <i class="fas fa-arrow-right"></i></p>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            $conn->close();
            ?>
    </div>
</section>
<br><br><br><br>
<footer>
    <p>Designed by MEJ Software</p>
</footer>
        </center>