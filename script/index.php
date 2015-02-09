<?php
    // Afficher les erreurs pour le developpement
    error_reporting( E_ALL );
    ini_set( 'display_errors', 1 );

    // Inclure mon tableau de mot et de lettres
    include( 'data/letters.php' );
    include( 'data/words.php' );

    // Inclure fichier de config
    include( 'configs/config.php' );

    // Inclure mon modele
    include( 'models/model.php' );

    // - Le Jeu démarre !
    if( $_SERVER[ 'REQUEST_METHOD' ] === 'GET' )
    {
        $word = selectWord( $words );
        $chainReplace = createReplaceString( $word );
    }
    elseif( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' )
    {
        
    }

    // Inclure la vue
    include( 'views/layout.php' );
