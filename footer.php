<footer class="footer">
    <div class="container">
        <a href="/" class="footer__logo">
            <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/footer-logo.svg" alt="Logo">
        </a>
        <h3 class="footer__subtitle">
            Grab your slice of the decentralized financial market.
        </h3>
        <div class="footer__wrap">
            <div class="footer__menu">
                <div class="footer__item-title">We’re Cake</div>
                <!-- <ul class="footer__item-list">
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">Products</a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">Roadmap</a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">About</a>
                    </li>
                </ul> -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_1',
                        'menu_class' => 'footer__item-list',
                        'container' => false,
                        'depth' => 1,
                        'fallback_cb' => false
                    ));
                ?>
            </div>
            <div class="footer__menu">
                <div class="footer__item-title">Media</div>
                <!-- <ul class="footer__item-list">
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">Brand resources</a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">
                            Press
                            <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/share-footer.svg">
                        </a>
                    </li>
                </ul> -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_2',
                        'menu_class' => 'footer__item-list',
                        'container' => false,
                        'depth' => 1,
                        'fallback_cb' => false
                    ));
                ?>
            </div>
            <div class="footer__menu">
                <div class="footer__item-title">Products & Tech</div>
                <!-- <ul class="footer__item-list">
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">P ∞ L</a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">DeFi Blockchain</a>
                    </li>
                </ul> -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_3',
                        'menu_class' => 'footer__item-list',
                        'container' => false,
                        'depth' => 1,
                        'fallback_cb' => false
                    ));
                ?>
            </div>
            <div class="footer__menu">
                <div class="footer__item-title">Join us</div>
                <!-- <ul class="footer__item-list">
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-link">
                            Explore careers
                            <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/share-footer.svg">
                        </a>
                    </li>
                </ul> -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_4',
                        'menu_class' => 'footer__item-list',
                        'container' => false,
                        'depth' => 1,
                        'fallback_cb' => false
                    ));
                ?>
            </div>
        </div>
        <div class="footer__messagers">
            <a href="#" class="footer__messagers-item">
                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/facebook-white.svg">
            </a>
            <a href="#" class="footer__messagers-item">
                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/twitter-white.svg">
            </a>
            <a href="#" class="footer__messagers-item">
                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/reddit-white.svg">
            </a>
            <a href="#" class="footer__messagers-item">
                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/youtube-white.svg">
            </a>
        </div>
        <div class="footer__date">
            © 2019, Cake Pte. Ltd.
        </div>
        <a href="#" class="footer__bottom-picture">
            <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/cake.svg" alt="Cake">
        </a>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>