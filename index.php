<?php get_header(); ?>

<div id="page-content" class="body-text">

    <aside id="sidebar" class="<?php the_field('sidebar_background', 41); ?>">

    </aside>

    <section class="news-page">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="post-wrap">
			<div class="entry-meta"><?php the_date('l, j F Y'); ?></div><!-- .entry-meta -->
			<h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="text"><?php the_excerpt(); ?></div>
			<a href="<?php echo get_permalink(); ?>" class="read-more"></a>
		</div>
	<?php endwhile; ?>
	<div id="blog-pager" class="center-content"><?php posts_nav_link(' ', 'Newer', 'Older'); ?></div>

    </section>

</div>

<?php get_footer(); ?>
