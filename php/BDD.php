<?php
// connexion avec mysqli 
class DBAccess{

    public static function dbConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "game";

    // création de la connexion avec la classe mysqli
    $mysqli = new mysqli($servername, $username, $password, $dbName);

    // vérification connection
        if ($mysqli->connect_error) {
            die("Echec de la connection: " . $mysqli->connect_error);
        }
        return $mysqli;
    }
} 