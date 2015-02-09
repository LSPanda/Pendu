<!DOCTYPE html><!--[if lt IE 7]><html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="fr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Le Pendu</title>
  <meta name="description" content="Jeu du pendu créer entièrement en PHP dans le cadre de mon cours de Programmation Web Côté Serveur.">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="">
  <link rel="stylesheet" href="css/main-min.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  <!-- Inclure le header de ma vue -->
  <?php include( 'partials/header.php' ) ?>

  <!-- Inclure le jeu dans ma vue -->
  <?php include( 'partials/game.php' ) ?>

  <!-- Inclure le resultat dans ma vue -->
  <?php include( 'partials/result.php' ) ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/script.js"></script>
</body>
