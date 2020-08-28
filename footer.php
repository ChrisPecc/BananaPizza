<?php
/*template Name: footer */
?>

<footer>
    <img class="footer-hachures" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-noires.png" alt="">
    <div class="footer-container">
    
        <div class="footer-info">
            <h2><?php echo bloginfo('name') ;?></h2>
            <div class="footer-info-text">
                
                <p><?php echo get_field('description', 'option') ;?></p>
            </div>
            <div class="footer-info-social">
                <a href="<?php echo get_field('facebook', 'option') ;?>" class="footer-fb"><img src="<?php bloginfo('template_url'); ?>/assets/svg/facebook.svg" alt=""></a>
                <a href="<?php echo get_field('twitter', 'option') ;?>" class="footer-twitter"><img src="<?php bloginfo('template_url'); ?>/assets/svg/twitter.svg" alt=""></a>
                <a href="<?php echo get_field('insta', 'option') ;?>" class="footer-insta"><img src="<?php bloginfo('template_url'); ?>/assets/svg/instagram.svg" alt=""></a>
                <a href="<?php echo get_field('linkedin', 'option') ;?>" class="footer-linkedin"><img src="<?php bloginfo('template_url'); ?>/assets/svg/linkedin.svg" alt=""></a>
            </div>
        </div>
        <div class="footer-contact-hour">
            <div class="footer-open">
                <h3>Open Hours</h3>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Mondays</p>
                            <p class='day-line'><hr></p>
                            <p><?php echo get_field('monday_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Tue-Fri</p>
                            <p><hr></p>
                            <p><?php echo get_field('tue_fri_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Sat-Sun</p>
                            <p><hr></p>
                            <p><?php echo get_field('sat_sun_hour', 'option');?></p>
                    </div>
                </div>
                <div class="footer-days-open">
                    <div class="footer-hour">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt="">
                    </div>
                    <div class="footer-days-hour">
                            <p>Public Holidays</p>
                            <p><hr></p>
                            <p><?php echo get_field('holiday_hour', 'option');?></p>
                    </div>
                </div>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                        <img src="<?php bloginfo('template_url'); ?>/assets/svg/call.svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('phone', 'option');?></p>
                    </div>
                </div>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                    <img src="<?php bloginfo('template_url'); ?>/assets/svg/place.svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('street_adress', 'option');?></p>
                        <p><?php echo get_field('postalcode_adress', 'option');?></p>
                        <p><?php echo get_field('country_adress', 'option');?></p>
                    </div>
                </div>
                <div class="footer-contact-line">
                    <div class="footer-logo-contact">
                    <img src="<?php bloginfo('template_url'); ?>/assets/svg/mail-1.svg" alt="">
                    </div>
                    <div class="footer-info-contact">
                        <p><?php echo get_field('mail', 'option');?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-insta">
            <h3>Instagram</h3>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat1.jpg" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat2.jpg" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat3.jpg" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat4.jpg" alt="">   
            </div>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat5.jpg" alt="">
            </div>
            <div class="footer-imgbox">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/plat6.jpg" alt="">   
            </div>
        </div>
        <div class="footer-copyright">
            <hr>
            <p>© 2020 All Rights Reserved. Designed By BananaPizza Studio</p>
        </div>

    </div>

</footer>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const hamburger = document.querySelector(".hamburgerIcon");
        const closeMenu = document.querySelector(".closeMenu");
        const menu = document.querySelector(".menuHAM");
        let query = window.matchMedia("(min-width: 992px)");

        
        hamburger.addEventListener("click", function(){
            menu.classList.add("open");
        })
        closeMenu.addEventListener("click", function(){ 
            menu.classList.remove("open");
        })
    });
</script>
</body>
</html>