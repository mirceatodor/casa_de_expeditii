<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/style.css' );
     /*linie care ii da instructiuni lui WP sa adauge stilul nostru in head*/

    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap', false ); 
    /*adauga un stil de font*/

     }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); 

    /*WP contine hook.uri (ca cel de mai sus); cu  add action adaugam functii la aceste kook.uri*/
    /*hookurile sunt niste functii pe care WP le adauga in timpul rularii lui de la inceput pana la sfarsit; 
    prin comenzi specifice ne putem agata de ele ca saincarcam scripturile noastre*/