<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style/style2.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification_register.php" method="POST">
 <h1>Inscription</h1>
 
 <label><b>Nom</b></label>
 <input type="text" placeholder="Entrer le nom" name="nom" required>

 <label><b>Prénom</b></label>
 <input type="text" placeholder="Entrer le prénom" name="prenom" required>

 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='REGISTER' >
 <a href="index.php" class="index">Accueil</a>

 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
if($err == 2){
    echo "<p style='color:red'> Champs manquant !</p>";

}
 
 }
 ?>
 </form>
 </div>
 </body>
</html>