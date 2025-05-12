<?php
/* Template Name: Galerie */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="galerie-contenu">
        <?php 
        // Affiche la galerie en utilisant le shortcode Responsive Lightbox & Gallery
        echo do_shortcode('[rl_gallery id="26"]');
        ?>
    </div>
</div>

<style>
    .galerie-contenu {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
</style>

<?php
get_footer(); // Affiche le pied de page
?>
