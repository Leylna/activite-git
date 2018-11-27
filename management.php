<?php

session_start();
require_once 'config.php';

// Si l'utilisateur n'est pas connecté
if (user_is_connected()==false) {
    header("Location: /login.php");
    exit;
}

// Si l'utilisateur n'a pas les droits right
if (user_have_right()==false) {
    print("Vous n'avez pas les droits<br><a href='index.php'>Retourner à l'accueil</a>");
    exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Management</title>

    <link rel="stylesheet" href="styles/app.css">
    <!-- Ajout de la page css -->
    <link rel="stylesheet" href="styles/management.css">
    <!-- Ajout du css de BOOTSTRAP -->
    <link rel="stylesheet" href="styles/css/bootstrap.css">
    <!-- Ajout de police -->
    <link rel="stylesheet" href="styles/font-awesome/scss/font-awesome.css">
  </head>
  <body>
    <div class="row">
     <div class="table-responsive">
      <div class="container-fluid">
       <div class="nav navbar-nav navbar-left">
        <a href="logout.php" class="btn btn-info">
          <i class="fa fa-user-times fa-3x" aria-hidden="true"></i>
        </a>
        <a id="home" href="index.php" class="btn btn-info">
         <i class="fa fa-home fa-3x" aria-hidden="true"></i>
       </a>
       </div>

       <P id="titre-booktik">BOOKTIK</P>
       <div id="container">
        <div id="crud-section">
            <a href="auteurs/view/index.php" class="section">
                <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                <h1>Auteurs</h1>
            </a>
            <a href="documents/view/index.php" class="section">
                <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                <h1>Documents</h1>
            </a>
            <a href="editeurs/view/index.php" class="section">
                <i class="fa fa-envelope-open fa-5x" aria-hidden="true"></i>
                <h1>Editeurs</h1>
            </a>
            <a href="support/view/index.php" class="section">
                <i class="fa fa-ticket fa-5x" aria-hidden="true"></i>
                <h1>Supports</h1>
            </a>
            <a href="emprunt/index.php" class="section">
                <i class="fa fa-archive fa-5x" aria-hidden="true"></i>
                <h1>Emprunt</h1>
            </a>
         </div>
        </div>
      </div>
     </div>
   </div>
  </body>
</html>
