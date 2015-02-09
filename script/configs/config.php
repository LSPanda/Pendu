<?php
    // Définir les variables pour mes vues
    define( 'TITLE', 'Le Pendu' );
    define( 'DESCRIPTION', 'Jeu du pendu créer entièrement en PHP dans le cadre de mon cours de Programmation Web Côté Serveur.' );
    define( 'PATH_STYLE', 'css/main-min.css' );
    define( 'HEADING', 'Le Pendu du Panda' );

    // Variables correspondantes au status d'un mot pendant le jeux
    /* Caractère de remplacement */
    $replace = '-';
    /* Chaîne de remplacement */
    $chainReplace = '';
    /* Le mot est trouvée ? */
    $wordFind = false;

    // Variables correspondantes à a durée de vie de la partie
    /* Nombre d'essai maximum de jeu */
    define( 'MAX_TRY', 7 );
    /* Nombre d'essai déjà réalisé */
    $try = 1;
    /* Nombre de coup restant à jouer */
    $stillTry = MAX_TRY;
    /* La partie à t'elle commencé */
    $gameStart = false;
    /* La partie est-elle finie ? */
    $gameOver = false;

    // Variables correspondantes à la gestion du tableau de lettre
    /* Sérialiser le tableau de lettre pour le conserver plus facilement */
    $serializeLetters = urlencode( serialize( $letters ) );
    /* La lettre choisie par l'utilisateur est la bonne ? */
    $findLetter = false;
    /* Chaîne regroupant les lettres déjà utilisés */
    $tryLetters = [];
