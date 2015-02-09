<?php
    // Fichier des modèles pour mon pendu
    // - Choisir un mot aléatoire dans le tableau des mots
    function selectWord( $arrayWords ) {
        $iWord = rand( 0, count( $arrayWords ) - 1 );
        $word = $arrayWords[ $iWord ];

        return $word;
    };

    function createReplaceString( $chosenWord ) {
        $stringReplace = '';

        $nbLetters = mb_strlen( $chosenWord );
        for( $i = 0; $i < $nbLetters; $i++ )
        {
            $stringReplace .= REPLACE;
        };

        return $stringReplace;
    };
