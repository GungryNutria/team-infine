<header class="team-background">
    <div class="overlay">
    <?php
    include 'menu.php';
    ?>
    <section class="header-body-center">
    <?php 
        include 'src/php/conection.php';
        $sql = "SELECT equipo,logo FROM equipos WHERE id_equipo = $equipo";
        $result = $conn->query($sql);
        $json = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<img src="src/assets/imagenes/logo.png">';
                echo '<h1>'.$row["equipo"].'</h1>';
            }
        }
        $conn->close();
        ?>
    </section>
    </div>
</header>
<center>
<section class="players-container">
        <div class="players">
        <?php 
        include 'src/php/conection.php';
        $sql = "SELECT username,rol,E.equipo,foto FROM usuarios AS U JOIN roles AS R ON U.roll = R.id_roll JOIN equipos AS E ON U.equipo = E.id_equipo WHERE id_equipo = $equipo";
        $result = $conn->query($sql);
        $json = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                
                echo '<div class="player-page">';
                echo '  <div class="player">';
                echo '      <div class="player-image">';
                echo '          <img src="src/assets/imagenes/'.$row["foto"].'">';
                echo '      </div>';
                echo '      <div class="player-content">';
                echo '          <div class="text">';
                echo '              <p class="roll">'.$row["rol"].'</p>';
                if($row["username"] == "-"){
                echo '              <h3>Vacante</h3>';
                }else{
                echo '              <h3>'.strval($row["username"]).'</h3>';
                }
                echo '              <p>'.$row["equipo"].'</p>';
                echo '          </div>';
                echo '          <div class="player-button">';
                echo '              <a href="#">Ver Jugador</a>';
                echo '          </div>';
                echo '      </div>';
                echo '  </div>';
                echo '</div>';   
                
            }
        }
        $conn->close();

    
        ?>
        </div>
</section>
</center>
