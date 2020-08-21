<?php 
/*
* Template Name: Restaurant
* Template Post Type: post, restaurant
*/
?>

<body>
    <?php
    get_header();
    ?>
    <main>
        <section class="banner-top">
            <div class="img-container">
                <img class="banner-image" src="<?php echo get_field('img_BTop'); ?>">
                <img class="banner-hash" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises.png">
            </div>
            <p class="subtitles"><?php the_field('subtitle-BTop') ?></p>
            <h1 class="title"><?php the_field('main_title_BTop') ?></h1>
            <a class="bt-link" href="<?php the_field('link_BTop')?>">check our menu</a>
        </section>

        <section class="banner-presentation">
            <p class="subtitles2"><?php the_field('subtitle_BPres') ?></p>
            <h2 class="title2"><?php the_field('title_BPres') ?></h2>

            <?php
            $count=1;
            if( have_rows('repeater_BPres') ):
                while(have_rows('repeater_BPres')): the_row();
                    ?>
                    <div class="info-container-mobile <?php if ($count%2==1):?>info-container1<?php else:?>info-container2 <?php endif;?>">
                        <div class="info-picture">
                            <img class="info-image" src="<?php echo get_sub_field('image_repeater_BPres'); ?>">
                        </div>
                        <div class=info-text>
                            <p class="subtitles3"><?php echo get_sub_field('subtitle_repeater_BPres') ?></p>
                            <h3 class="title3"><?php echo get_sub_field('title_repeater_BPres') ?></h3>
                            
                            <?php echo get_sub_field('wysiwyg_repeater_BPres') ?>

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
            ?>
        </section>
        
        <section class="location">
            <img class="banner-hash2" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises.png">
            <p class="subtitles2"><?php the_field('subtitle_loc') ?></p>
            <h2 class="title2"><?php the_field('title_loc') ?></h2>
            <img class="map-image" src="<?php echo get_field('map_loc'); ?>">
        </section>

        <section class="reservation">
            <p class="subtitles2"><?php the_field('subtitle_reserv') ?></p>
            <h2 class="title2"><?php the_field('title_reserv') ?></h2>
            <div class="order-section">
                <div class="reserv-image-container">
                    <img class="reserv-image" src="<?php echo get_field('image_reserv'); ?>">
                </div>
                <div class="reservation-form">
                    <form action="#" method="post">
                        <div class="form-2-by-row">
                            <div class="single-input">
                                <label for="name">Your Name</label>
                                <input class="input" type="text" name="name">
                            </div>
                            <div class="single-input">
                                <label for="email">Your Email</label>
                                <input class="input" type="email" name="email">
                            </div>
                        </div>

                        <div class="form-2-by-row">
                            <div class="single-input">
                                <label for="phone">Phone Number</label>
                                <input class="input" type="text" name="phone">
                            </div>
                            <div class="single-input">
                                <label for="table">Table For</label>
                                <input class="input" type="number" name="table" min="1" placeholder="1 person">
                            </div>
                        </div>
                        
                        <div class="single-input single-line">
                            <label for="place">Place</label>
                            <select class="input" name="place">
                                <option value="chefscafetaria" Selected>The Chef's Cafetaria</option>
                                <option value="becentral">The BeCentral resto</option>
                                <option value="honkytonk">The Honkytonk</option>
                            </select>
                        </div>

                        <div class="form-2-by-row">
                            <div class="single-input">
                                <label for="time">Select Time</label>
                                <input class="input" type="time" name="time">
                            </div>
                            <div class="single-input">
                                <label for="email">Select Date</label>
                                <input class="input" type="date" name="date">
                            </div>
                        </div>

                        <div class="single-input single-line">
                            <label for="message">Your Message</label>
                            <textarea name="message" rows="7"></textarea>
                        </div>

                        <div class="single-input submit-input">
                            <input class="submit-btn" type="submit" value="Reserve Now">
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>
    <?php
    get_footer();
    ?>
</body>