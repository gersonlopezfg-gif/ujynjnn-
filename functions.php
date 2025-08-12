<?php

function twa_theme_scripts() {
    // Cargar Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );

    // Cargar Tailwind CSS desde el CDN
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );

    // Cargar nuestro archivo style.css principal
    wp_enqueue_style( 'twa-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'twa_theme_scripts' );

?>
