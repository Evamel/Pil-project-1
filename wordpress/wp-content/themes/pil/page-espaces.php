<?php 

// Template Name: espace
get_header(); 

?> 
<div class="banner_esp">
    <h1 class="titre_banner_esp"><?php the_field('titre_banner_esp') ?></h1>
    <?php if( get_field('image_banner_esp') ): ?>
        <img class="image_banner_esp" src="<?php the_field('image_banner_esp'); ?>" />
    <?php endif; ?>
</div>
<div class="nos_espaces">
    <div class="presentation-esp">
        <h1 class="titre_esp_esp"><?php the_field('titre_esp_esp') ?></h1>
        <h4 class="introduction_esp_esp"><?php the_field('introduction_esp_esp') ?></h4>
    </div>
    <div class="texte-esp">
        <p class="texte_esp_esp"><?php the_field('texte_esp_esp') ?></p>
        <?php 
        $link = get_field('bouton_esp_esp');
        if( $link ): ?>
            <a class="bouton_esp_esp" href="<?php echo esc_url( $link ); ?>">Réservez votre espace +</a>
        <?php endif; ?>
    </div>
</div>
<div class="outils-prod">
    <div class="texte-prod">
        <h1 class="titre_op_esp"><?php the_field('titre_op_esp') ?></h1>
        <p class="introduction_op_esp"><?php the_field('introduction_op_esp') ?></p>
    </div>
    <div class="img-prod">
        <?php if( get_field('image_op_esp') ): ?>
            <img class="image_op_esp" src="<?php the_field('image_op_esp'); ?>" />
        <?php endif; ?>
    </div>
</div>

<div class="footer-esp">
    <?php get_template_part('banniere-cta')?>
</div>



<?php 

get_footer();

?>
