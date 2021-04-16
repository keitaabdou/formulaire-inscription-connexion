<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost:3308;dbname=youtube;charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }