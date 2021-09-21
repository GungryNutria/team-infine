<?php
class Operations{
    private $team =0;
    function registerTeam($equipo,$correo,$discord,$telefono,$torneo){
        try{
            include 'conection.php';
            $stmt = $conn->prepare("INSERT INTO equipos_torneos (equipo, correo, discord, telefono, torneo) VALUES (?,?,?,?,?)");
            $stmt->bind_param("ssssi", $equipo, $correo, $discord, $telefono, $torneo);
            if($stmt->execute()){
                $this->team = mysqli_stmt_insert_id($stmt);
            } else{
                echo 'Algo salio mal';
            }
        } catch (Exception $e) {
                $error = $e->getMessage();
                echo "ERROR!";
        }
            
        $stmt->close();
        $conn->close();
    }
    function registerMember($member,$rol){
        try{
            include 'conection.php';
            $stmt = $conn->prepare("INSERT INTO jugadores_torneos (jugador, rol, equipo) VALUES (?,?,?)");
            $stmt->bind_param("sii", $member, $rol, $this->team);
            if($stmt->execute()){
                echo 'Registro Exitoso';
            } else{
                echo 'Algo salio mal';
            }
        } catch (Exception $e) {
                $error = $e->getMessage();
                echo "ERROR!";
        }
            
        $stmt->close();
        $conn->close();
    }
}
?>