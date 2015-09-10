<?php get_header(); ?>

<div id="page-content" class="body-text">

    <aside id="sidebar" class="<?php the_field('sidebar_background'); ?>">

    </aside>

    <section>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?>
    </section>

</div>

<?php get_footer(); ?>