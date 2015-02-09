<?php
    // Afficher les erreurs pour le developpement
    error_reporting( E_ALL );
    ini_set( 'display_errors', 1 );

    // Inclure mon tableau de mot
    include( 'data/word.php' );
    
    // Inclure fichier de config
    include( 'configs/config.php' );


    // Inclure la vue
    include( 'views/layout.php' );
