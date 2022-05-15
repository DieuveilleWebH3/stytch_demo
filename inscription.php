<?php
    /* 
        ********** PAS Terminé ************
    */

    session_start();

    //connexion a la base de donnees
    include 'connexionDB.php';

    $titre = 'Inscription';

    if(isset($_POST['confirm'])) {
        //inserer un nouvel utilisateur
        $inserTournoi = $bdd->exec("INSERT INTO tournoi( nom, prenom, adresse, ville, code_postal, tel, email, mdp, date_inscription) VALUES("
        .$_GET['nom'].","
        .$_GET['prenom'].","
        .$_GET['adresse'].","
        .$_GET['ville'].","
        .$_GET['code_postal'].","
        .$_GET['tel'].","
        .$_GET['email'].","
        .$_GET['mdp'].","
        .$_GET['date_inscription'].","
        .$_GET['mdp'].");"  
        );
    }

?>