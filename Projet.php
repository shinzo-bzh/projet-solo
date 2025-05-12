<?php
/* Template Name: Projet Tattoo */

get_header();
?>

<div class="section">
    <div class="projet-container">
        <h1 class="projet__title"><?php the_title(); ?></h1>

        <?php if (get_field('titre_projet')) : ?>
            <h2 class="projet__subtitle"><?php the_field('titre_projet'); ?></h2>
        <?php endif; ?>

        <div class="projet__content">
            <?php echo wpautop(get_field('texte_projet')); ?>
        </div>

        <div class="projet-formulaire">
            <?php echo do_shortcode('[contact-form-7 id="88d0044" title="Projet tatouage"]'); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
