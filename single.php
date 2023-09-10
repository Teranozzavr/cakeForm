<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <footer class="entry-footer">
                            <?php edit_post_link(__('Edit', 'your-theme'), '<span class="edit-link">', '</span>'); ?>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>