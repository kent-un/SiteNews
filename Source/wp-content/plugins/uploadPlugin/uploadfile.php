<?php
// Upload file
function upload_mail(){
  if(isset($_POST['but_submit'])){

    if($_FILES['file']['name'] != ''){
      $uploadedfile = $_FILES['file'];
      $upload_overrides = array( 'test_form' => false );
      $email= $_POST['email'];
      $emailDest= $_POST['emaildest'];

      $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
      $imageurl = "";
      if ( $movefile && ! isset( $movefile['error'] ) ) {
      //Création du lien fichier
        $imageurl = $movefile['url'];
        echo "Lien du fichier partagé : ".$imageurl;
      //Création table dans BDD si elle n'existe pas déjà
        global $wpdb; 
        $charset_collate = $wpdb->get_charset_collate();
        $fichier_table = $wpdb->prefix . 'fichiers';

        $sql= 
        "CREATE TABLE IF NOT EXISTS $fichier_table (
          id_fichier INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
          nom_fichier VARCHAR(100) DEFAULT NULL, 
          date_fichier DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL , 
          taille_fichier VARCHAR(100) DEFAULT NULL, 
          url_fichier TEXT DEFAULT NULL
          ) $charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

      //Insertion informations fichier dans BDD
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
      
      //Envoi du mail
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= "From: ".$email.""."\r\n".
    'Content-Type: text/plain; charset="utf-8"'."\r\n".
                  'Content-Transfer-Encoding: 8bit';
    $mailtxt= $email." a partagé un fichier avec vous, il est consultable via ce lien: http://localhost/Sites/Technews/Source/index.php/downloads/?idfichier=".$idFichier;
    $retour= mail($emailDest, "Partage de fichier", $mailtxt, $headers);
    if($retour){
      echo '<br>';
      echo 'Votre fichier est uploadé et a été envoyé à '.$emailDest;}
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
          <td><input type='email' name='email'></td>  
      </tr>
      <tr>
          <td>Email du destinataire</td>
          <td><input type='email' name='emaildest'></td>  
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type='submit' name='but_submit' value='Envoyer'></td>
      </tr>
    </table>
  </form>
