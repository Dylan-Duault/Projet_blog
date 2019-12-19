<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Page membre</title>
    <link rel="stylesheet" href="style_section.css">  
  </head>
  <body>
  <?php
  if(isset($_SESSION['pseudo']) AND isset($_SESSION['id']))
  {
    include("header_auth.php");  
  }
  else
  {
    include("header.php");  
  }
  ?>
    <div class="conteneur">
      <div class="msg">
        <p>Le site est en construction!</p>
        <p>Il y aura bientôt des articles sur cette page</p>
      </div>
    </div>
  </body>
</html>


