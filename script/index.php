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
        $iWord        = selectIndice( $words );
        $word         = selectWord( $words, $iWord );
        $chainReplace = createReplaceString( $word );
    }
    elseif( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' )
    {
        if( $wordFind === false )
        {
            $gameStart          = true;
            $try                = getPOST( 'try' );
            $iWord              = getPOST( 'iWord' );
            $word               = selectWord( $words, $iWord );
            /* Récupérer la lettre choisie */
            $letters            = getUnserializePOST( getPOST( 'serializeLetters' ) );
            $letter             = getPOST( 'tryLetter' );
            /* Retirer les lettres utlisées du select */
            $letters[ $letter ] = false;
            /* Sauvegarder le nouveau tableau */
            $serializeLetters   = mySerialize( $letters );
            $tryLetters         = getPOST( 'tryLetters' );
            /* Ajouter les lettres utilisées dans la variable */
            $tryLetters        .= $letter;
            /* Recupèrer la chaîne de remplacement */
            $chainReplace       = getPOST( 'chainReplace' );
            /* Ajouter les lettres dans la chaine de remplacement */
            for( $i = 0; $i < mb_strlen( $word ); $i++ )
            {
                if( $word[ $i ] === $letter )
                {
                    $chainReplace[ $i ] = $letter;
                    $findLetter         = true;
                }
            }
            if( !$findLetter )
            {
                $try++;
            }
            $stillTry = $stillTry - $try;

            /* Le mot est trouvé ? */
            for( $w = 0; $w < mb_strlen( $chainReplace ); $w++ )
            {
                if( $chainReplace[ $w ] === REPLACE )
                {
                    $wordFind = false;
                }
                else
                {
                    $wordFind = true;
                }
            }
        }
        if( $stillTry === 0 )
        {
            $gameStart = false;
            $gameOver  = true;
            $wordFind  = false;
        }
        if( $wordFind === true )
        {
            $gameStart  = true;
            $gameOver   = true;
        }
    }

    // Inclure la vue
    include( 'views/layout.php' );
