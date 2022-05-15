<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=stych_recrutement;charset=utf8', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)//en cas d'erreur
    {
            die('Erreur : ' . $e->getMessage());
    }

?>