<?php
require_once('class/BDD.php');
session_start();
function connexion(){
    if(!empty($_POST["email"] && isset($_POST["email"]))){
        $infoUser= new DBAccess();
        $database=$infoUser->dbConnection();
        
        if($infoUser->recupMail($database, $_POST["email"])){
            session_start();
            $_SESSION['user']= $infoUser->recupMail($database, $_POST["email"]);
            header('location:../index.php?page=accueil');
        }
        else{
            header('location:../index.php?page=connexion');
        }
    }
}

function ajout()
{   
    $infoUser= new DBAccess();
    $database=$infoUser->dbConnection();
    $infoUser->addUser($database, $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email']);
    header('location:../index.php?page=accueil');
}
function modifier($id)
{
    $infoUser= new DBAccess();
    $database=$infoUser->dbConnection();
    $infoUser->updateUser($database, $id, $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email']);
    header('location:../index.php?page=accueil');
}
function supprimer($id)
{
    $infoUser= new DBAccess();
    $database=$infoUser->dbConnection();
    $infoUser->deleteUser($database, $id);
    header('location:../index.php?page=accueil');
}
function vider()
{
    session_destroy();

    header('location:../index.php?page=accueil');
}


switch($_GET['action']){
    case "ajout":
        ajout();
        break;
    case "modifier":
        modifier($_GET['id']);
        break;
    case "supprimer":
        supprimer($_GET['id']);
        break;
    case "vider":
        vider();
        break;
    case "connexion":
        connexion();
        break;
    }