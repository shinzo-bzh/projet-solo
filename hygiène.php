<?php
/* Template Name: Hygiène */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="hygiene-container">
        <?php if (get_field('titre_hygiene')) : ?>
            <h1 class="hygiene__title"><?php the_field('titre_hygiene'); ?></h1>
        <?php endif; ?>

        <?php if (get_field('texte_hygiene')) : ?>
            <div class="hygiene__content">
                <?php echo wpautop(get_field('texte_hygiene')); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>
