<?php get_header() ?>



<main>
<div class="presentation">
  <h1 classe="presentation__textpres"><?php echo get_field('presentation__textpres'); ?>  </h1>

  <a href="<?php echo get_field('presentation_bouton_url'); ?>" class="presentation__bouton"> 
  <?php echo get_field('presentation__bouton_text'); ?>
   </a>

  <div><img src="<?php echo get_field('presentation__video'); ?>" alt="vid"></div>

</div>

<div class="galerie">
  <div >Réalisations</div>

  <div class="galerie__images"></div>

</div>

</body>

</html>
</main>

<?php get_footer() ?> 