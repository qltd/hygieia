<div class="bucket link-list">
	<h4 class="title">News + Events</h3>
	<div class="text body-text">
		<ul>
		<?php query_posts(array('posts_per_page' => get_sub_field('number_of_posts'), 'post_status' => 'publish'));
		while (have_posts()) : the_post(); ?>
		<?php $cat = get_the_category( $post->id); ?>
			<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> <i class="icon-<?php echo ($cat[0]->slug == 'event') ? 'calendar' : 'play'; ?>"></i></a></li>
		<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
</div>