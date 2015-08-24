<?php get_header(); ?>


    <?php if (is_category()): ?>
    	<div id="page-headers" class="centered body-text"><h1><?php single_tag_title(); ?></h1>
    <?php else: ?>
    	<div id="page-content" class="center-content body-text"><?php $page = get_page(12); echo $page->post_content; ?>
    <?php endif; ?>
	</div>

<div class="centered">
	<div class="filter-wrap">
			Filter by: <a href="#" class="filter-btn">Category</a>
			<div class="ftg-filters">
				<a href="<?php echo get_permalink(12); ?>">View All</a>
				<?php  $categories = get_categories();
					foreach($categories as $category){
						echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
					}
				?>	
			</div>
		</div>

		<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    						<input type="text" value="Search" name="s" id="s" />
    						<input type="submit" id="search-btn" title="Search" value="">
       					</form>
</div>

<div id="blogroll" class="center-content body-text">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="post-wrap">
			<h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="text"><?php the_excerpt(); ?></div>
			<div class="featured-image"><?php echo wp_get_attachment_image(get_field('featured_image'), 'content-image'); ?></div>
			<a href="<?php echo get_permalink(); ?>" class="read-more"></a>
			<div class="entry-meta"><?php the_author(); ?> &nbsp;|&nbsp; <?php the_date(); ?> &nbsp;|&nbsp; <?php the_category(' '); ?></div><!-- .entry-meta -->
		</div>
	<?php endwhile; ?>
	<div id="blog-pager" class="center-content"><?php posts_nav_link(' ', 'Newer', 'Older'); ?></div>
</div>

<?php get_footer(); ?>