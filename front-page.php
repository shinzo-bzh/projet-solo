<?php
/* Template Name: Accueil */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="accueil-container">
        <!-- Afficher le titre de bienvenue -->
        <?php if (get_field('titre_bienvenue')) : ?>
            <h1 class="accueil__title"><?php the_field('titre_bienvenue'); ?></h1>
        <?php endif; ?>

        <!-- Afficher la vidéo d'accueil (si c'est un champ de type oEmbed ou URL) -->
        <?php 
        $video_accueil = get_field('video_accueil');
        if ($video_accueil) : ?>
            <div class="accueil__video">
                <?php echo wp_oembed_get($video_accueil); ?>
            </div>
        <?php endif; ?>

        <!-- Afficher le titre de la galerie (utilisation du champ ACF) -->
        <?php if (get_field('titre_galerie')) : ?>
            <h2 class="accueil__section-title"><?php the_field('titre_galerie'); ?></h2>
        <?php endif; ?>

        <!-- Afficher la galerie avec le shortcode du plugin -->
        <div class="accueil__gallery">
            <?php echo do_shortcode('[rl_gallery id="26"]'); ?>
        </div>

        <!-- Afficher le titre et texte de prestation -->
        <?php if (get_field('titre_presta')) : ?>
            <h2 class="accueil__presta-title"><?php the_field('titre_presta'); ?></h2>
        <?php endif; ?>

        <?php if (get_field('texte_presta')) : ?>
            <p class="accueil__presta-text"><?php the_field('texte_presta'); ?></p>
        <?php endif; ?>

        <!-- Afficher l'avis Google -->
        <?php if (get_field('avis_google')) : ?>
            <div class="accueil__avis">
                <a href="<?php the_field('avis_google'); ?>" target="_blank" rel="noopener noreferrer">
                    Lire les avis Google
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>
