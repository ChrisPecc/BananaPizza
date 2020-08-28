<?php
/* 
Template Name: archive-recipes
*/
get_header(); ?>


<main class="archive-recipes-page">
    <section class="banner-top">
        <div class="img-container">
            <img class="banner-image" src="<?php bloginfo('template_url'); ?>/assets/images/resto1.jpg">
            <img class="banner-hash" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises.png">
        </div>
        <p class="subtitles">The Chef's selection</p>            
        <h1 class="title">Recipes Blog</h1>
        <a class="bt-link" href="/?page_id=147">check our menu</a>
    </section>

    <section class="category-list">
        <?php
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
            'category' => 'recettes',
            'hide_empty' => false,
        ) );
        ?>
        
        <form method="post">
        <input type="submit" name="category" value="All Categories">
        <?php

        foreach($categories as $category) {
            ?>
                <input type="submit" name="category" value="<?php echo $category->name; ?>">
                <?php
                ?>
            <?php   
        }
        ?>
        </form>
    </section>
    
    <section class="recipes-list">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        if (isset($_POST['category'])){
            if ($_POST['category']=='All Categories'){
                $args = array(
                    'post_type'=>array('recettes'), 
                    'posts_per_page'=>5, 
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'paged' => $paged,
                    
                );
            }

            else {
                $args = array(
                    'post_type'=>array('recettes'), 
                    'posts_per_page'=>5, 
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'paged' => $paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'name',
                            'terms'    => $_POST['category'],
                        ),
                    ),
                    
                );

            }
            
        }

        // if (!empty($_COOKIE['category'])){
        //     $args = array(
        //         'post_type'=>array('recettes'), 
        //         'posts_per_page'=>5, 
        //         'orderby' => 'date',
        //         'order'   => 'DESC',
        //         'paged' => $paged,
        //         'tax_query' => array(
        //             array(
        //                 'taxonomy' => 'category',
        //                 'field'    => 'name',
        //                 'terms'    => $_COOKIE['category'],
        //             ),
        //         ),
                
        //     );
        // }


        else {
            $args = array(
                'post_type'=>array('recettes'), 
                'posts_per_page'=>5, 
                'orderby' => 'date',
                'order'   => 'DESC',
                'paged' => $paged,
                
            );

        }

        $query = new WP_Query($args);

        $count=0;
        if ( $query -> have_posts() ) : 
            while ( $query -> have_posts() ) : $query -> the_post();
                $category= get_the_category();
                ?>
                <div class="info-container-mobile <?php if ($count%2==1):?>info-container1<?php else:?>info-container2 <?php endif;?>">
                    <div class="post-picture">
                        <img class="post-image" src="<?php the_field('main_image'); ?>">
                    </div>

                    <div class="post-text">
                        <p class="date"><?php echo get_the_date( 'd M Y' ); ?></p>
                        <span class="category"><?php echo $category['0'] ->cat_name; ?></span>
                        <h3 class="title3"><?php the_field('title'); ?></h3>
                        <p class="shordesc"><?php the_field('short_description'); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>

                </div>
                <?php
                $count++;
            endwhile;
        else:
            ?>
        <p>Cette section est vide</p>
        <?php
        endif;
        wp_reset_postdata();
        
        ?>
        <div class="pagination">
        <?php previous_posts_link(__('&larr; newer', 'whatisthat')); ?>

            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
        </div>
        


    </section>
</main>


<?php
get_footer();
?>