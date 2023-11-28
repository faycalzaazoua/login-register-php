<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nom']) && isset($_POST['prenom']))
{
 // connexion à la base de données
 $db_username = 'root';
 $db_password = 'root';
 $db_name = 'miniapp';
 $db_host = 'localhost';
 $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
 );

 $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',
 $db_username,
 $db_password,
 $options);

 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database');
 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $username = $_POST['username']; 
 $password = $_POST['password'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];


 
 if($username !== "" && $password !== "" && $nom !== "" && $prenom !== "")
 {
$requete =  "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe, nom, prenom)
 VALUES (?,?,?,?)";

//  $exec_requete = mysqli_query($db,$requete);
//  $reponse = mysqli_fetch_array($exec_requete);
 $params = array($username, $password, $nom, $prenom);
 $insertUser = $dbh -> prepare($requete);
 $insertUser -> execute($params);
 

 header('Location: login.php?erreur=3'); // success

 }
 else
 {
 header('Location: register.php?erreur=2'); // champ vide
 }
}
else
{
 header('Location: register.php');
}
mysqli_close($db); // fermer la connexion
?>