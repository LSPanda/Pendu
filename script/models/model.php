<?php
    // Fichier des modèles pour mon pendu
    // - Choisir l'indice du mot aléatoire
    function selectIndice( $arrayWords ) {
        $index = rand( 0, count( $arrayWords ) - 1 );

        return $index;
    };

    // - Choisir un mot aléatoire dans le tableau des mots
    function selectWord( $arrayWords, $index ) {
        $word = $arrayWords[ $index ];

        return $word;
    };

    // - Créer le string de remplacement
    function createReplaceString( $chosenWord ) {
        $stringReplace = '';

        $nbLetters = mb_strlen( $chosenWord );
        for( $i = 0; $i < $nbLetters; $i++ )
        {
            $stringReplace .= REPLACE;
        };

        return $stringReplace;
    };

    // - Récupèrer une valeur dans le formulaire
    function getPOST( $data ) {
        return $_POST[ $data ];
    };

    // - Sérialisée des information
    function mySerialize( $data ) {
        return urlencode( serialize( $data ) );
    };

    // - Récupèrer une valeur dans le formulaire et la désérialiser
    function getUnserializePOST( $data ) {
        return unserialize( urldecode( $data ) );
    };
