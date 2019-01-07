<?php
/*
  Plugin Name: Upload Plugin
  description: A simple custom plugin to file upload
  Version: 1.0.0
  Author: Quentin Dherret
*/

// Add menu
function customplugin_menu() {

  add_menu_page("Partage Fichiers", "Partage Fichiers","manage_options", "myplugin", "uploadfile",plugins_url('/customplugin/img/icon.png'));
   
}

add_action("admin_menu", "customplugin_menu");

function uploadfile(){
  include "uploadfile.php";
}

add_shortcode('download', 'uploadfile');
