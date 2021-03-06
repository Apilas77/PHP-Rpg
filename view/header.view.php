<?php
require_once('controller/class/BDD.php');
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/custom.css">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?page=accueil">Gestion des utilisateurs</a>
            </div>
            <div>
                <?php if (!empty($_SESSION)) { ?>
                    <a class="navbar-brand" href="controller/action.php?action=vider">Supprimer Session</a>
                <?php  } else { ?>
                   
                    <a class="navbar-brand" href="index.php?page=connexion">Connexion</a>
                <?php } ?>
            </div>
        </nav>