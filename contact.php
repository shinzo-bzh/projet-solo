<?php
/* Template Name: Contact */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="container">
        <h1 class="section-title">Contact</h1>
        
        <div class="card contact-info">
            <ul>
                <li>
                    <strong>Numéro de téléphone:</strong>
                    <div>
                        <?php echo nl2br(get_field('numero_telephone')); ?>
                    </div>
                </li>

                <li>
                    <strong>E-mail:</strong>
                    <div>
                        <?php echo nl2br(get_field('adresse_mail')); ?>
                    </div>
                </li>

                <li>
                    <strong>Horaires:</strong>
                    <div>
                        <?php echo nl2br(get_field('horraires')); ?>
                    </div>
                </li>
            </ul>
        </div>

        <div class="contact-social">
            <?php
            // Récupérer les liens
            $lien_fb = get_field('lien_fb');
            $lien_insta = get_field('lien_insta');

            // Vérifier si les liens existent avant d'afficher les icônes
            if ($lien_fb) : ?>
                <a href="<?php echo esc_url($lien_fb); ?>" target="_blank" aria-label="Facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook" width="24" height="24">
                </a>
            <?php endif; ?>

            <?php if ($lien_insta) : ?>
                <a href="<?php echo esc_url($lien_insta); ?>" target="_blank" aria-label="Instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram" width="24" height="24">
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>