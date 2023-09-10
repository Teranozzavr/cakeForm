<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div class="benner__top">
    <div class="container">
        <div class="row">
            <div class="benner__top-logo">
                <img src="<?php the_field('banner_image'); ?>" alt="Logo">
            </div>
            <div class="benner__top-info">
                <p class="benner__top-info-text"><?php the_field('banner_bottom_text'); ?></p>
                <a href="#" class="benner__top-arrow">
                    <img src="<?php the_field('banner_arrow'); ?>" class="benner__top-arrow-picture" alt="Arrow">
                </a>
                <div class="benner__top-info-social">
                    <a href="<?php the_field('banner_link_facebook'); ?>" class="benner__top-info-social-link">
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/facebook.svg" class="benner__top-info-social-picture" alt="Facebook">
                    </a>
                    <a href="<?php the_field('banner_link_twitter'); ?>" class="benner__top-info-social-link">
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/twitter-square.svg" class="benner__top-info-social-picture" alt="Twitter">
                    </a>
                    <a href="<?php the_field('banner_link_reddit'); ?>" class="benner__top-info-social-link">
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/reddit-square.svg" class="benner__top-info-social-picture" alt="Redit">
                    </a>
                    <a href="<?php the_field('banner_link_youtube'); ?>" class="benner__top-info-social-link">
                        <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/youtube.svg" class="benner__top-info-social-picture" alt="YouTube">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <section class="decentralized">
        <div class="container">
            <div class="row">
                <h2 class="title decentralized__title"><?php the_field('decentralized_title'); ?></h2>
                <h3 class="decentralized__subtitle">
                    <?php the_field('decentralized_subtitle'); ?>
                </h3>
                <div class="decentralized__products">
                    <div class="decentralized__products-item">
                        <img src="<?php the_field('decentralized_first_image'); ?>" class="decentralized__products-item-picture">
                        <p class="decentralized__products-item-text">
                            <?php the_field('decentralized_first_text'); ?>
                        </p>
                    </div>
                    <div class="decentralized__products-item">
                        <img src="<?php the_field('decentralized_second_image'); ?>" class="decentralized__products-item-picture">
                        <p class="decentralized__products-item-text">
                            <?php the_field('decentralized_second_text'); ?>
                        </p>
                    </div>
                    <div class="decentralized__products-item">
                        <img src="<?php the_field('decentralized_third_image'); ?>" class="decentralized__products-item-picture">
                        <p class="decentralized__products-item-text">
                            <?php the_field('decentralized_third_text'); ?>
                        </p>
                    </div>
                </div>
                <div class="decentralized__directors">

                    <?php
                    $first_director = get_field("first_director");
                    ?>

                    <div class="decentralized__directors-item">
                        <img src="<?php echo $first_director['first_director_image']; ?>"
                        class="decentralized__directors-picture">
                        <div class="decentralized__directors-item-position">
                            <?php echo $first_director['first_director_position']; ?>
                        </div>
                        <p class="decentralized__directors-item-name">
                            <?php echo $first_director['first_director_name']; ?>
                            <a href="#" class="decentralized__directors-item-link">
                                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/linkedin.svg" alt="Linkedin">
                            </a>
                        </p>
                    </div>

                    <?php
                    $second_director = get_field("second_director");
                    ?>

                    <div class="decentralized__directors-item">
                        <img src="<?php echo $second_director['second_director_image']; ?>" class="decentralized__directors-picture">
                        <div class="decentralized__directors-item-position">
                            <?php echo $second_director['second_director_position']; ?>
                        </div>
                        <p class="decentralized__directors-item-name">
                            <?php echo $second_director['second_director_name']; ?>
                            <a href="#" class="decentralized__directors-item-link">
                                <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/linkedin.svg" alt="Linkedin">
                            </a>
                        </p>
                    </div>
                </div>

                <?php 
                $decentralized_link = get_field('decentralized_button_link');
                ?>

                <a href="<?php echo $decentralized_link['url']; ?>" class="decentralized__btn">
                    <?php echo $decentralized_link['title']; ?>
                </a>
            </div>
        </div>
    </section>
    <section class="accessible">
        <div class="container">
            <div class="row">
                <h3 class="accessible__subtitle">
                <?php the_field('accessible_subtitle'); ?>
                </h3>
                <div class="accessible__carts">
                    <?php $first_cart = get_field('accessible_first_cart'); ?>
                    <div class="accessible__carts-item">
                        <img src="<?php echo $first_cart['first_cart_image'] ?>" class="accessible__carts-item-picture">
                        <a href="<?php echo $first_cart['first_cart_button']['url']; ?>" class="accessible__carts-item-btn">
                        <?php echo $first_cart['first_cart_button']['title']; ?>
                        </a>
                    </div>
                    <?php $second_cart = get_field('accessible_second_cart'); ?>
                    <div class="accessible__carts-item">
                        <div class="accessible__carts-item-block"></div>
                        <a href="<?php echo $second_cart['second_cart_button']['url']; ?>" class="accessible__carts-item-btn">
                            <?php echo $second_cart['second_cart_button']['title']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="simple">
        <div class="container">
            <div class="row">
                <h3 class="simple__subtitle">
                    <?php the_field('simple_subtitle'); ?>
                </h3>
                <div class="simple__steps">
                    <?php $first_date = get_field('simple_first_date'); ?>
                    <div class="simple__steps-item">
                        <div class="simple__steps-month"><?php echo $first_date['month']; ?></div>
                        <p class="simple__steps-plan"><?php echo $first_date['action']; ?></p>
                    </div>
                    <?php $second_date = get_field('simple_second_date'); ?>
                    <div class="simple__steps-item">
                        <div class="simple__steps-month"><?php echo $second_date['month']; ?></div>
                        <p class="simple__steps-plan"><?php echo $second_date['action']; ?></p>
                    </div>
                    <?php $third_date = get_field('simple_third_date'); ?>
                    <div class="simple__steps-item">
                        <div class="simple__steps-month"><?php echo $third_date['month']; ?></div>
                        <p class="simple__steps-plan"><?php echo $third_date['action']; ?></p>
                    </div>
                </div>
                <a href="<?php echo $simple_link['url']; ?>" class="simple__btn">
                    <?php $simple_link = get_field('simple_link'); ?>
                    <?php echo $simple_link['title']; ?>
                </a>
            </div>
        </div>
    </section>
    <section class="opportunities">
        <div class="container">
            <div class="row">
                <div class="opportunities__top">
                    <img src="<?php  bloginfo('template_url'); ?>/assets/img/svg/briefcase.svg">
                </div>
                <div class="opportunities__text">
                    <?php the_field('opportunities_subtitle'); ?>
                </div>
                <?php $opportunites_btn = get_field('opportunities_link'); ?>
                <a href="<?php echo $opportunites_btn['url']; ?>" class="opportunities__btn">
                    <?php echo $opportunites_btn['title']; ?>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/share-white.svg" alt="Share">
                </a>
                <span class="opportunities__small-text">
                    <?php the_field('opportunities_text'); ?>
                </span>
            </div>
        </div>
    </section>
    <section class="cake__form">
        <div class="container">
            <div class="row">
                <h3 class="cake__form-subtitle">
                    <?php the_field('cake_form_subtitle'); ?>
                </h3>
                <form>
                    <label>
                        <input type="email" placeholder="Enter your e-mail">
                    </label>
                    <label>
                        <input type="submit" value="Subscribe">
                    </label>
                </form>
                <p class="cake__form-text">
                    <?php the_field('cake_form_text'); ?>
                </p>
                <div class="cake__form-messangers">
                    <a href="<?php the_field('cake_form_facebook_link'); ?>" class="cake__form-messangers-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/facebook-form.svg">
                    </a>
                    <a href="<?php the_field('cake_form_twitter_link'); ?>" class="cake__form-messangers-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/twitter-form.svg">
                    </a>
                    <a href="<?php the_field('cake_form_reddit_link'); ?>" class="cake__form-messangers-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/reddit-form.svg">
                    </a>
                    <a href="<?php the_field('cake_form_youtube_link'); ?>" class="cake__form-messangers-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/youtube-form.svg">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>