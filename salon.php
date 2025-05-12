<?php
/* Template Name: Salon */

get_header(); // Inclut l'entête du thème
?>

<div class="section">
    <div class="salon-container">
        <h1 class="section-title"><?php echo str_replace('Le Salon', '<span class="salon__title--highlight">Le Salon</span>', get_the_title()); ?></h1>

        <section class="salon-bloc" style="background-color: <?php echo get_field('background_realisations'); ?>">
            <div class="salon-bloc__content">
                <?php if (get_field('titre_salon')) : ?>
                    <h2><?php the_field('titre_salon'); ?></h2>
                <?php endif; ?>
                <div>
                    <?php echo nl2br(get_field('texte_salon')); ?>
                </div>
            </div>
            <div class="salon-bloc__image">
                <?php echo wp_get_attachment_image(get_field('image_salon'), 'full'); ?>
            </div>
        </section>

        <section class="salon-tatoueur" style="background-color: <?php echo get_field('background_hygiene'); ?>">
            <div class="salon-tatoueur__content">
                <?php if (get_field('titre_tatoueur')) : ?>
                    <h2><?php the_field('titre_tatoueur'); ?></h2>
                <?php endif; ?>
                <div>
                    <?php echo nl2br(get_field('texte_tatoueur')); ?>
                </div>
            </div>
            <div class="salon-tatoueur__image">
                <?php echo wp_get_attachment_image(get_field('image_tatoueur'), 'full'); ?>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>