<center>
<div class="form-container">
    <h1>Registra tu equipo</h1>
    <br><br>
    <form action="" method="post">
        <input type="text" name="equipo" placeholder="Nombre del Equipo" required>
        <br><br>
        <input type="email" name="correo" placeholder="Correo Electronico" required>
        <br><br>
        <input type="text" name="discord" placeholder="Discord ID" required>
        <br><br>
        <input type="tel" name="telefono" placeholder="Telefono +520123456789" pattern="+[0-9]{2}[0-9]{10}" required>
        <br><br>
        <h3>Integrantes</h3>
        <br>
        <?php
        for ($i=0; $i < $members+1 ; $i++) {
            if($i+1 == 1) echo '<input type="text" name="member-'.strval($i+1).'" placeholder="GT Capitan" required><br><br>';
            if ($i+1 == $members+1) echo '<input type="text" name="member-'.strval($i+1).'" placeholder="GT Integrante Extra" required><br><br>';
            if($i+1 != 1 && $i+1 != $members+1)echo '<input type="text" name="member-'.strval($i+1).'" placeholder="GT Integrante" required><br><br>';
            
        }
        ?>
        <input type="submit" name="submit" value="Registrarse" class="orange-button" required>
        <br><br>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        include 'src/php/operations.php';
        $op = new Operations();
        $equipo = $_POST["equipo"];
        $correo = htmlspecialchars($_POST["correo"]);
        $discord = htmlspecialchars($_POST["discord"]);
        $telefono = htmlspecialchars($_POST["telefono"]);
        if($equipo == "" || $equipo[0] == " ") die('Ingresar un equipo');
        if($correo == "" || $correo[0] == " ") die('Ingresar un correo'); 
        if($discord == "" || $discord[0] == " ") die('Ingresar una cuenta de Discord'); 
        if($telefono == "" || $equipo[0] == " ") die('Ingresar un numero valido');
        $op->registerTeam($equipo,$correo,$discord,$telefono,$torneo);
        for ($i=0; $i < $members; $i++) { 
            $member = $_POST["member-".strval($i+1)]; 
            if ($member == "" || $member[0] == " ") die('Jugador Vacio');
            if($i+1 == 1) $op->registerMember($member,3);
            if ($i+1 == $members+1) $op->registerMember($member,4);
            if($i+1 != 1 && $i+1 != $members+1) $op->registerMember($member,1);
        }
    }
    ?>
</div>
</center>