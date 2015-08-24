<?php

    function excerpt($length) {

        global $post;

        $text = get_the_excerpt();

        // Dont cut if too short
        if ( strlen( $text ) < $length + 10 ) return $text;

        // Find next space
        $break_pos = strpos( $text, ' ', $length );

        // Cut String
        $visible = substr($text, 0, $break_pos);

        // Return String
        return balanceTags( $visible ) . '...';

    }