<?php
session_start();
?>
<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body>
 <div id="container">
 <h1 style="text-align:center">Bienvenue <?php echo $_SESSION['username'] ?></h1>
 <p style="text-align:center">Vous êtes connecté ! :)</p>
 </div>
 </body>
</html>