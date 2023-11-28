<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style/style3.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1 style="text-align:center">Accueil</h1>
 <h3>- Bienvenue sur MiniAPP -</h3>
 <br>
 <div style="text-align:center;">
    <a href="login.php" class="login">Se connecter</a>
    <a href="register.php" class="register">S'inscrire</a>
 </div>

 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 if($err == 3){
    echo "<p style='color:green'> Inscription réalisée avec Succès !</p>";

 }
 }
 ?>
 </form>
 </div>
 </body>
</html>