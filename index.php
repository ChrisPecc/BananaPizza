<?php
/*template Name: front page */
?>
    <?php get_header(); ?>
    <div class="index-container" >
        <div class="index-banner" style="background-image:url(<?php echo get_field('banner_top_img'); ?>)">
            <div class="banner-titles">
                <div class="subtitle">
                <p><?php echo get_field('banner_top_subtitle');?></p>
                </div>
                <div class="main-title">
                <h1><?php echo get_field('banner_top_title');?></h1>
                </div>
                <div class="intern-link">
                <a href="<?php echo get_field('menu_link');?>">Check our Menu</a>
                </div>
            </div> 
        </div>
        <div class="banner-icon">
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises-top.png" alt="">
        <div class="block-icons">
            <div class="icon">
                <div class="img-box-icon">
                    <img src="<?php echo get_field('icone_gauche');?>" alt="">
                </div>
                <div class="icon-info">
                <h3><?php echo get_field('titre_gauche');?></h3>
                <p><?php echo get_field('texte_gauche');?></p>
                </div>
            </div>
            <div class="icon">
                <div class="img-box-icon">
                    <img src="<?php echo get_field('icone_milieu');?>" alt="">
                </div>
                <div class="icon-info">
                <h3><?php echo get_field('titre_milieu');?></h3>
                <p><?php echo get_field('texte_milieu');?></p>
                </div>
            </div>
            <div class="icon">
                <div class="img-box-icon">
                        <img src="<?php echo get_field('icone_droite');?>" alt="">
                </div>
                <div class="icon-info">
                <h3><?php echo get_field('titre_droite');?></h3>
                <p><?php echo get_field('texte_droite');?></p>
                </div>
            </div>

        </div>
            
        </div> 
    </div>
    <div class="chef-info">
        <div class="img-box-chef">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/the-chef.jpg" alt="">
        </div>
        <div class="text-chef">
            <h3>discover</h3>
            <h2>Our story</h2>
            <p>ultimate dining like no other</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto nulla repudiandae maxime, libero non assumenda saepe officiis accusamus fuga ullam doloremque obcaecati quisquam. Qui sunt dicta quae beatae odio at.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto nulla repudiandae maxime, libero non assumenda saepe officiis accusamus fuga ullam doloremque obcaecati quisquam. Qui sunt dicta quae beatae odio at.</p>
        </div>
        
    </div>

    <?php get_footer(); ?>
