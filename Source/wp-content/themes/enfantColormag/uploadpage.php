<?php
/**
 * Theme Page Section for our theme.
 * Template name: Upload Page
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
get_header(); ?>

	<?php do_action( 'colormag_before_body_content');
 ?>
	<div id="primary">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<?php
				global $wpdb; 
				$idFichier= $_GET['idfichier'];
				$nomFichier = $wpdb->get_var("SELECT nom_fichier FROM wp_fichiers WHERE id_fichier = $idFichier");
				$tailleFichier = $wpdb->get_var("SELECT taille_fichier FROM wp_fichiers WHERE id_fichier = $idFichier");
				$dateFichier = $wpdb->get_var("SELECT date_fichier FROM wp_fichiers WHERE id_fichier = $idFichier");
				$urlFichier = $wpdb->get_var("SELECT url_fichier FROM wp_fichiers WHERE id_fichier = $idFichier");
				
				echo 'Nom du fichier: '.$nomFichier.' <br> Taille du fichier: '.$tailleFichier.' octets. <br>
				Ce fichier a été partagé le: '.$dateFichier.' <br>
				Pour télécharger le fichier cliquez sur le bouton suivant: <a href="'.$urlFichier.'" download><input type="button" value="Download"></a>';
				?>
				<?php
					do_action( 'colormag_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
	      		do_action ( 'colormag_after_comments_template' );
				?> 
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>
