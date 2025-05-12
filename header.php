<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <?php wp_head(); ?>

    <style>
        body {
            background-image: url('<?php echo wp_get_attachment_image_url(get_field('img_fond'), 'full'); ?>');
            background-size: 85% auto;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-color: #1a1a1a;
            position: relative;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }

        @media (max-width: 768px) {
            body {
                background-size: 85% auto;
            }
        }
    </style>
</head>

<body <?php body_class('body'); ?>>
    <header class="header">
        <div class="header__container">
            <div class="header__logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>

            <nav class="header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'header__menu',
                    'container' => false,
                    'fallback_cb' => false,
                    'depth' => 2,
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>
            </nav>

            <button class="header__burger" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.header__burger');
            const nav = document.querySelector('.header__nav');

            burger.addEventListener('click', function() {
                nav.classList.toggle('active');
                burger.classList.toggle('active');
            });
        });
    </script>
</body>

</html>