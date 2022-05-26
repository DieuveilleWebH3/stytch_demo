<?php
    /* 
        ********** PAS Terminé ************
    */

    session_start();

    //connexion a la base de donnees
    include 'connexionDB.php';

    $titre = 'Inscription';

    // if(isset($_POST['confirm'])) {
    //     //inserer un nouvel utilisateur
    //     $insertUser = $bdd->exec("INSERT INTO utilisateur(nom, prenom, adresse, ville, code_postal, tel, email, mdp, date_inscription) VALUES("
    //     .$_GET['nom'].","
    //     .$_GET['prenom'].","
    //     .$_GET['adresse'].","
    //     .$_GET['ville'].","
    //     .$_GET['code_postal'].","
    //     .$_GET['tel'].","
    //     .$_GET['email'].","
    //     .$_GET['mdp'].","
    //     .$_GET['date_inscription'].","
    //     .$_GET['mdp'].");"  
    //     );
    // }

    // Taking all values from the form data(input)
    $prenom =  $_REQUEST['prenom'];
    $nom = $_REQUEST['nom'];
    $adresse =  $_REQUEST['adresse'];
    $code_postal = $_REQUEST['code_postal'];
    $ville = $_REQUEST['ville'];
    $email = $_REQUEST['email'];
    $tel = $_REQUEST['tel'];
    $mdp = $_REQUEST['mdp'];

?>