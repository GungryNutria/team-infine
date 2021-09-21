<header class="home-background">
    <div class="overlay">
    <?php
    include 'menu.php';
    ?>
    <section class="header-body-center">
        <h1>TEAM INFINE - HALO</h1>
        <br>
        <P>Bienvenido al portal oficial de la comunidad de Halo - Team Infine.</P>
        <br><br><br>
        <p>
            <a href="#" class="orange-button padding-1">Nuestros Equipos</a>
            
        </p>
    </section>
    </div>
</header>
<center>
<section class="about-container">
    <div class="about">
        <div class="text">
            <h1>SE UNO DE NOSOTROS</h1>
            <br><br>
            <p>Somos un equipo de alto rendimiento listos para cualquier reto que nos pongan, Unete a nosotros y reclama la victoria!!!</p>
            <br><br>
            <a href="" class="orange-button padding-2">Unete al Equipo</a>
        </div>
        <div class="video">
        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/UhUIY9_urrI"></iframe>
        </div>
    </div>
</section>
<section class="teams-container">
    <h1>EQUIPOS</h1>
    <br>
    <p>Conoce nuestros equipos</p>
    <br><br>
    <div class="teams">
    <?php 
        include 'src/php/conection.php';
        $sql = "SELECT id_equipo,equipo,logo FROM equipos WHERE id_equipo <= 3";
        $result = $conn->query($sql);
        $json = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<div class="team">';
                echo '<h2>'.$row["equipo"].'</h2>';
                echo '<br>';
                echo '<p>Halo</p>';
                echo '<br><br>';
                echo '<img src="src/assets/imagenes/teams-logo/'.$row["logo"].'.png" alt="" width="150px">';
                echo '<br><br>';
                echo '<div class="team-button">';
                echo '<a href="equipo?equipo='.$row["id_equipo"].'">Ver Equipo</a>';
                echo '</div>';
                echo '</div>';
            }
        }
        $conn->close();
        ?>
        
    </div>
</section>
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
<!-- <section class="creators-container">
    <h1>Nuestros Creadores de Contenido</h1>
    <br><br>
    <div class="creators">
        <a href="#" class="creator"><h1>Streamer</h1></a>
        <a href="#" class="creator"><h1>Streamer</h1></a>
        <a href="#" class="creator"><h1>Streamer</h1></a>
    </div>
</section>
<section class="tournaments-container">
    <div class="tournaments">

    </div>
</section> -->
<footer>
    <p>Designed by MEJ Software</p>
</footer>
</center>