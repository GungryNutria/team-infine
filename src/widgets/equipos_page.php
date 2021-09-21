<header class="team-background">
    <div class="overlay">
    <?php
    include 'menu.php';
    ?>
    <section class="header-body-center">
        <h1>EQUIPOS DE ALTO RENDIMIENTO</h1>
        <br>
        <P>Conoce todos nuestros equipos en los que puedes ser parte de ellos.</P>
        <br><br><br>
        <p>
            <a href="#" class="orange-button padding-1">Unete a Nosotros</a>
        </p>
    </section>
    </div>
</header>
<center>
<section class="teams-container no-margin">
    <h1>EQUIPOS</h1>
    <br>
    <p>Conoce nuestros equipos</p>
    <br><br>
    <div class="teams">
    <?php 
        include 'src/php/conection.php';
        $sql = "SELECT id_equipo,equipo,logo FROM equipos";
        $result = $conn->query($sql);
        $json = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<div class="team-page">';
                echo '<div class="team">';
                echo '<h2>'.$row["equipo"].'</h2>';
                echo '<br>';
                echo '<p>Halo</p>';
                echo '<br><br>';
                echo '<img src="src/assets/imagenes/teams-logo/'.$row["logo"].'.png" width="150px">';
                echo '<br><br>';
                echo '<div class="team-button">';
                echo '<a href="equipo?equipo='.$row["id_equipo"].'">Ver Equipo</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        $conn->close();
        ?>
        
    </div>
</section>
</center>