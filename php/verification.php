<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'in19b1168';
    $db_password = '8169';
    $db_name     = 'in19b1168';
    $db_host     = '192.168.128.13';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM USERS where email = '".$email."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];



        $requeteGetId = "SELECT id_users FROM USERS where email = $email and  email = '".$email."' and password = '".$password."' ";
        $exec_requeteGetId = mysqli_query($db,$requete);
        $reponseGetId      = mysqli_fetch_array($exec_requete);
        $idUser = $reponse['id_users'];


        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['username'] = $email;
            $_SESSION['idUsers'] = $idUser;

            header('Location: mainPage.php');
        }
        else
        {
            header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
        header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
    header('Location: connexion.php');
}
mysqli_close($db); // fermer la connexion
?>