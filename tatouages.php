<?php
/* Template Name: Tatouages */

get_header();
?>

<div class="section">
    <div class="tatouages-container">
        <h1 class="section-title"><?php the_title(); ?></h1>

        <div class="tatouages-grid">
            <a href="/mes-realisations" class="tatouages-card" style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('background_realisations'), 'full'); ?>')">
                <div class="tatouages-card__content">
                    <h2>Réalisations</h2>
                    <p>Découvrez mes dernières créations et mon portfolio de tatouages.</p>
                </div>
            </a>

            <a href="/hygiene" class="tatouages-card" style="background-image: url('<?php echo wp_get_attachment_image_url(get_field('background_hygiene'), 'full'); ?>')">
                <div class="tatouages-card__content">
                    <h2>Hygiène</h2>
                    <p>Informations sur les normes d'hygiène et de sécurité.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
?> 