<?php

/*
Plugin Name: Glocal
Plugin URI: http://gloc.al
Description: Glocal WordPress integration
Version: 1.0
Author: polRk
Author URI: http://polrk.com
*/

/* add hreflangs */
function glocal_add_hreflangs() {
    $langs = array(
        "ru",
        "es",
        "fr",
        "de",
        "ja",
        "tr",
        "pt",
        "fa",
        "it",
        "zh",
        "nl",
        "vi",
        "pl",
        "ar",
        "ko",
        "id",
        "cs",
        "uk",
        "el",
        "he",
        "th",
        "sv",
        "ro",
        "hu"
    );

    $url = get_permalink();
    $host = parse_url($url, PHP_URL_HOST);

    echo '<link rel="alternate" hreflang="x-default" href="' . $url . '">';

    for($i = 0; $i < count($langs); ++$i) {
        $localized_url = str_replace($host, $langs[$i] . '.' . $host , $url);

        echo '<link rel="alternate" hreflang="' . $localized_url . '" />';
    }
}

add_action( 'wp_head', 'glocal_add_hreflangs' );

?>
