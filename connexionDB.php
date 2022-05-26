<?php

    // try
    // {
    //     $bdd = new PDO('mysql:host=localhost;dbname=stych_recrutement;charset=utf8', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // }
    // catch (Exception $e)//en cas d'erreur
    // {
    //         die('Erreur : ' . $e->getMessage());
    // }


    try
    {
        $bdd = mysqli_connect("localhost", "root", "", "stych_recrutement");
          
        if($bdd === false)
        {
            die("ERROR: Could not connect. " 
                . $e->getMessage() . " "
                . mysqli_connect_error()
            );
        }
    }
    catch (Exception $e)
    {
        //  Check connection en cas d'erreur
        
        // die('Erreur : ' . $e->getMessage()); 
        
        die("ERROR: Could not connect. " 
            . $e->getMessage() . " "
            . mysqli_connect_error()
        );
    }

?>