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
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachure-blanches-top.png" alt="">
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
            <h3><?php echo get_field('title_chef_part1');?></h3>
            <h2><?php echo get_field('title_chef_part2');?></h2>
            <p><?php echo get_field('subtitle_chef');?></p>
            <p><?php echo get_field('textarea_chef');?></p>
            <p><?php echo get_field('subsignature_chef');?></p>
            <p><?php echo get_field('signature_chef');?></p>
        </div>
        
    </div>
    <div class="our-resto">
        <div class="our-resto-title">
            <p>discover our franchise</p>
            <h2>Our restaurant</h2>
        </div>
        <div class="resto-info">
            <div class="img-box-resto">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/resto1.jpg" alt="">
            </div>
            <div class="resto-text">
                <h2>bla bla bla</h2>
                <p>bla bla bla bla</p>
                <p>bla bla bla bla</p>
                <p>bla bla bla bla</p>
            </div>
        </div>
        
    </div>
    <div class="discover-menu">
        <div class="discover-title-mobile">
            <h2>coucouc</h2>
            <h2>coucouc</h2>
        </div>
        <div class="discover-img">
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/plat1.jpg" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/plat1.jpg" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/plat1.jpg" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/plat1.jpg" alt="">
            </div>
           
        </div>
        <div class="discover-title-tab">
            <h2 class='hide-tab'>coucou</h2>
            <h2 class='hide-tab'>coucou</h2>
            <p>cou cou cou </p>
            <a href="#">coucou</a>
        </div>
    </div>

    <?php get_footer(); ?>
