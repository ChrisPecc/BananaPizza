<?php
/*template Name: front page */
?>
    <?php get_header(); ?>
    <div class="back-color">
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
        <?php
        $the_query_restaurant = new WP_Query(array(
                        'post_type' => 'restaurant',
                        'order'   => 'DESC',
                    ));
        ?>
        <?php while ($the_query_restaurant->have_posts()): $the_query_restaurant->the_post();
                $image = get_field('img_BTop');
            ?>
        <div class="resto-info">
            <div class="img-box-resto">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/resto1.jpg" alt="">
            </div>
            <div class="resto-text">
                <h2><?php echo get_field('main_title_BTop');?></h2>
                <p><?php echo get_field('subtitle-BTop');?></p>
                <?php while (have_rows('repeater_BPres')): the_row(); ?>
                <p><?php echo get_sub_field('wysiwyg_repeater_BPres');?></p>
                <?php endwhile; ?>
                <a href="<?php the_permalink(); ?>">More infos</a>
                
            </div>
        </div>  
        <?php endwhile; ?>

    </div>


    <div class="discover-menu">
        <div class="discover-title-mobile">
            <h2><?php echo get_field('field_5f48b2b8fb2b5', 75);?></h2>
            <h2><?php echo get_field('field_5f48b2c6fb2b6', 75);?></h2>
        </div>
        <div class="discover-img">
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php echo get_field('field_5f48b2cefb2b7', 75);?>" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php echo get_field('field_5f48b2e5fb2b8', 75);?>" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php echo get_field('field_5f48b2f5fb2b9', 75);?>" alt="">
            </div>
            <div class="discover-img-box">
                <img class="index-hachures" src="<?php echo get_field('field_5f48b2fbfb2ba', 75);?>" alt="">
            </div>
           
        </div>
        <div class="discover-title-tab">
            <h2 class='hide-tab'><?php echo get_field('field_5f48b2b8fb2b5', 75);?></h2>
            <h2 class='hide-tab'><?php echo get_field('field_5f48b2c6fb2b6', 75);?></h2>
            <p><?php echo get_field('field_5f48b324fb2bb', 75);?> </p>
            <a href="<?php echo get_field('menu_link');?>">View the full menu</a>
        </div>
        <img class="discover-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-blanches.png" alt="">
    </div>
    <div class="citation">
        <div class="citation-text">
            <p></p>
            <p><?php echo get_field('field_5f48b330fb2bc', 75);?></p>
            <p><?php echo get_field('field_5f48b336fb2bd', 75);?></p>
        </div>
        <div class="citation-img">
            <img src="<?php echo get_field('field_5f48b34cfb2be', 75);?>" alt="">
        </div>
        
    </div>
    <div class="recipes">
        <img class="citation-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises-top.png" alt="">
        <div class="recipes-title">
            <h3>latest updated</h3>
            <h3>recipes blog</h3>
        </div>
        <?php
        
            $the_query = new WP_Query(array(
                        'post_type' => 'recettes',
                        'posts_per_page' => 4,
                        'order'   => 'DESC',
                    ));
        ?>
        <div class="recipes-posts">
            <?php while ($the_query->have_posts()): $the_query->the_post();
                $image = get_field('main_image');
            ?>
                <div class="recipes-post">
                    <div class="recipes-img-box">
                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                    <p><?php echo get_the_date(); ?></p>
                    <h4><?php echo get_field('title');?></h4>
                    <p><?php echo get_field('short_description');?></p>
                    <div class="receipes-link">
                        <div class="link-empty">

                        </div>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
                
            <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="newsletter">
        <img class="citation-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-noires.png" alt="">
        <div class="newsletter-text">
            <h3>Join our newsletter</h3>
        </div>
        <div class="newsletter-input">
            <input type="email" name="email" id="" placeholder='Your Email Adress'>
            <input type="submit" value="SUBSCRIBE">
        </div>
    </div>
    </div>

    <?php get_footer(); ?>
