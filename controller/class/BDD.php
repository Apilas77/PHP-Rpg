<?php
// connexion avec mysqli 
class DBAccess{

    public static function dbConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "rpg-db";

    // création de la connexion avec la classe mysqli
    $mysqli = new mysqli($servername, $username, $password, $dbName);

    // vérification connection
        if ($mysqli->connect_error) {
            die("Echec de la connection: " . $mysqli->connect_error);
        }
        return $mysqli;
    }

    //récupération d'un utilisateur en BDD
    public static function afficherUser($mysqli, $id){
        $sql = "SELECT * FROM player WHERE id = $id";
        return $mysqli->query($sql);
    }

    public static function recupMail($mysqli, $mail){
        $sql = "SELECT * FROM user WHERE email = '$mail'";
        return $mysqli->query($sql);
        
    }

    //ajout d'un utilisateur en BDD
    public static function addPlayer($mysqli, $pseudo, $email){
        $stmt = mysqli_prepare($mysqli, "INSERT INTO `player` (pseudo, email) VALUES (?, ?)");

        $pseudoIncrement = $pseudo;
        $emailIncrement = $email;
        mysqli_stmt_bind_param($stmt, 'ssis', $pseudoIncrement, $emailIncrement);
        
        $stmt->execute();
        $mysqli->close();
    }

    public static function updateUser($mysqli, $id, $pseudo, $email){
        $stmt = mysqli_prepare($mysqli,"UPDATE player SET pseudo = ?, email = ? WHERE id = ?");
    
        $idIncrement=$id;
        $pseudoIncrement = $pseudo;
        $emailIncrement = $email;
        mysqli_stmt_bind_param($stmt, 'ssisi', $pseudoIncrement, $emailIncrement, $idIncrement);

        $stmt->execute();
        $mysqli->close();
    }

    public static function deleteUser($mysqli, $id){
        $stmt = mysqli_prepare($mysqli,"DELETE FROM `player` WHERE `id` = ?");

        $idIncrement=$id;
        mysqli_stmt_bind_param($stmt, 'i', $idIncrement);

        $stmt->execute();
        $mysqli->close();
    }

}


?>