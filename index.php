<?php get_header(); ?>

<div id="content" class="site-content">
    <main id="main" class="site-main">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </footer>
                </article>

            <?php
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>
