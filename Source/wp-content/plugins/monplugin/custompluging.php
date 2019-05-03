<?php
/*
Plugin Name: Transfert de fichier
Description: Plugin de transfert de fichier façon "We transfert"
Author: dcl.francisy
Version: 1.0
*/


// Ajouter un menu "CustomPlugin" dans WP 

function customplugin_menu () { 

    add_menu_page (
    "Custom Plugin", 
    "Custom Plugin", 
    "manage_options", 
    "monplugin", 
    "Téléchargement", 
    plugins_url ('/ customplugin / img / icon.png')
    ) ; 
} 
  
add_action ("admin_menu", "customplugin_menu" );

function uploadfile() { 
    include "uploadpage.php"; // Rattacher à la page concerner "transferDeFicherphp"
}

add_shortcode ('download' , 'uploadfile');

