<body>
    <?php
    get_header();
    ?>
    <main>
    <main>
        <section class="banner-top-menu">
            <div class="img-container">
                <img class="banner-image" src="<?php echo get_field('img_bt'); ?>">
                <img class="banner-hash" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-blanches.png">
            </div>
            <p class="subtitles"><?php the_field('subtitles_bt') ?></p>
            <h1 class="title"><?php the_field('main_title_bt') ?></h1>
            <a class="bt-link" href="<?php the_field('link_bt')?>">check our menu</a>
        </section>

        <section class="menu">
            <p class="subtitles2"><?php the_field('subtitle_menu') ?></p>
            <h2 class="title2"><?php the_field('title_menu') ?></h2>
            <div class="menu-itself">
                <?php
                if( have_rows('repeater_section') ):
                    while(have_rows('repeater_section')): the_row();
                        ?>
                        <div class="menu-subsection">
                            <h3><?php the_sub_field('section_menu') ?></h3>
                            <div class="menu-item">
                                <?php
                                if ( have_rows('repeater_items') ):
                                    ?>
                                    <ul>
                                        <?php
                                        while( have_rows('repeater_items') ): the_row();
                                        ?>
                                        <li>
                                            <?php the_sub_field('dish_name') ?>
                                            <?php the_sub_field('dish_price') ?>
                                            <?php the_sub_field('dish_description') ?>
                                        </li>


                                        <?php
                                        endwhile;
                                        ?>
                                    </ul>
                                    <?php
                                else:
                                    ?>
                                    <p>Cette section est vide</p>
                                    <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    ?>
                <p>Cette section est vide</p>
                <?php
                endif;
                ?>
            </div>
        </section>

    </main>
    <?php
    get_footer();
    ?>
</body>