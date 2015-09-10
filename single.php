<?php get_header(); ?>

<div id="page-content" class="body-text">

    <aside id="sidebar" class="<?php the_field('sidebar_background'); ?>">

    </aside>

    <section class="news-page">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="entry-meta"><?php the_date('l, j F Y'); ?></div><!-- .entry-meta -->
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </section>

</div>

<?php get_footer(); ?>