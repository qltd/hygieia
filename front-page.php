<?php get_header(); ?>

<section class="hero-unit" style="background: url(<?php the_field('hero_image'); ?>) no-repeat center center; background-size: cover;">
	<h2><?php the_field('hero_text'); ?></h2>
</section>

<section class="body-content">
	<div class="centered">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	     		<?php the_content(); ?>
		<?php endwhile; ?>

		<div class="left">
			<?php the_field('left_column_content'); ?>
		</div>
		<div class="right">
			<?php the_field('right_column_content'); ?>
		</div>
	</div>
</section>

<section class="flip-cards">
	<div class="centered">

		<div class="flip-container">
			<div class="flipper">
				<div class="front">
					<div>
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/patients-icon.svg'); ?>
						<h5>For Patients</h5>
					</div>
				</div>
				<div class="back">
					<div>
						<h5>For Patients</h5>
						<?php the_field('for_patients_content'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="flip-container">
			<div class="flipper">
				<div class="front">
					<div>
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/physicians-icon.svg'); ?>
						<h5>For Physicians</h5>
					</div>
				</div>
				<div class="back">
					<div>
						<h5>For Physicians</h5>
						<?php the_field('for_physicians_content'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="flip-container">
			<div class="flipper">
				<div class="front">
					<div>
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/payers-icon.svg'); ?>
						<h5>For Payers</h5>
					</div>
				</div>
				<div class="back">
					<div>
						<h5>For Payers</h5>
						<?php the_field('for_payers_content'); ?>
					</div>
				</div>
			</div>
		</div>


	</div>
</section>


<section class="callout red">
	<div class="centered">
		<?php the_field('callout_text'); ?>
	</div>
</section>

<section class="case-study">
	<div class="centered">
		<div class="left-col">
			<?php the_field('case_study_text'); ?><br />
		</div>
		<div class="right-col">
			<?php the_field('case_study_video'); ?>
		</div>
	</div>
</section>

<section class="news-feed">
	<div class="centered">
		<h3>What People Are Saying.</h3>
		<ul class="feed-list">
			<?php $args = array('numberposts' => 3, 'post_type' => 'post', 'post_status' => 'publish', 'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => 'event',
				'operator' => 'NOT IN'
			))); $recent_posts = wp_get_recent_posts( $args );
			foreach($recent_posts as $recent):
			 ?>
				<li><a href="<?php echo get_permalink($recent['ID']); ?>"><span class="date"><?php echo get_the_date('', $recent['ID']); ?></span> <?php echo $recent['post_title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<a href="<?php echo get_permalink(41); ?>" class="btn">More News</a>
	</div>
</section>

<section class="callout">
	<div class="centered">
		<?php the_field('callout_text2'); ?>
	</div>
</section>

<section class="event-feed">
	<?php the_field('events_content'); ?>
	<?php $args = array('numberposts' => 3, 'post_type' => 'post', 'post_status' => 'publish', 'category' => '3'); $recent_posts = wp_get_recent_posts( $args ); ?>
	<?php if (!empty($recent_posts)): ?>
		<h4>Upcoming Events</h4>
		<ul class="feed-lsit">
			<?php foreach($recent_posts as $recent):?>
				<li><a href="<?php echo get_permalink($recent['ID']); ?>"><span class="date"><?php echo get_the_date('', $recent['ID']); ?></span> <?php echo $recent['post_title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</section>

<section class="contact-callout">
	<div class="centered">
		<?php the_field('contact_content'); ?>
	</div>
</section>

<?php get_footer(); ?>