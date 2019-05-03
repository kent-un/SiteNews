<?php
// Télécharger le fichier
function upload_mail (){
    if(isset($_POST['Envoyer'])){

        if($_FILES['file']['name'] != ''){
            $uploadedfile = $_FILES['file'];
            $upload_overrides = array( 'test_form' => false );
            $emailexp= $_POST['emailexp'];
            $emaildest= $_POST['emaildest'];

            $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
            $imageurl = "";

            if ( $movefile && ! isset( $movefile['error'] ) ) {
            //Création du lien fichier
                $imageurl = $movefile['url'];
                echo "Lien dut fichier partagé : ".$imageurl;

// Connexion à la Bdd
            global $wpdb;
            $charset_collate = $wpdb->get_charset_collate();
            $fichier_table = $wpdb->prefix . 'fichier';

// Si inexistante, on créée la table SQL "fichier"
            $sql = 
            "CREATE TABLE IF NOT EXISTS $fichier_table (
            id_fichier INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
            nom_fichier VARCHAR(100) DEFAULT NULL, 
            date_fichier DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL , 
            taille_fichier VARCHAR(100) DEFAULT NULL, 
            url_fichier TEXT DEFAULT NULL
            ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);

// Intégration des informations fichier dans la BDD
            $dt = new DateTime();
            $wpdb->insert(
            $fichier_table,
            array(
                'nom_fichier' => $_FILES['file']['name'],
                
                'date_fichier' => $dt->format('Y-m-d H:i:s'),
                'taille_fichier' => $_FILES['file']['size'],
                'url_fichier' => $imageurl
            ) 
            );
            $idFichier= $wpdb->insert_id; 

// Envoi du mail 

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= "From: ".$emailexp.""."\r\n".
    'Content-Type: text/plain; charset="utf-8"'."\r\n".
                  'Content-Transfer-Encoding: 8bit';
    $mailtxt= $emailexp." a partagé un fichier avec vous, il est consultable via ce lien: http://localhost/TRAVAIL/DEV/SiteNews/Source/index.php/Téléchargement/?idfichier=".$idFichier;
    $retour= mail($emaildest, "Partage de fichier", $mailtxt, $headers);
    if($retour){
      echo '<br>';
      echo 'Votre fichier est uploadé et a été envoyé à '.$emaildest;}
    else{
      echo "Votre fichier n'a pas pu être envoyé, veuillez réessayer";}
      } else {
        echo $movefile['error'];
      }
    }
  
  }
}
upload_mail();

  ?>
 <h1>Partage de fichiers</h1>

  <!-- Form -->
 <form method='post' action='' name='myform' enctype='multipart/form-data'>
    <table>
      <tr>
        <td>Télécharger un fichier</td>
        <td><input type='file' name='file'></td>
      </tr>
      <tr>
          <td>Votre email</td>
          <td><input type='email' name='emailexp'></td>  
      </tr>
      <tr>
          <td>Email du destinataire</td>
          <td><input type='email' name='emaildest'></td>  
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type='submit' name='Envoyer' value='Envoyer'></td>
      </tr>
    </table>
  </form>
