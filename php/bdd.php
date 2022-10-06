<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=fil_rouge;charset=utf8','root','');  //fil_rouge est le nom de la bdd a changer si le nom est different dbname=fil_rouge 
    $bdd-> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd-> setATTRIBUTE(PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING);
    $bdd-> setATTRIBUTE(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(PDOexception $e)
{
    echo'echec de la connexion: '.$e->getMessage();
    exit;
}
    // Fin de bdd
?>
