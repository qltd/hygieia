<?php get_header(); ?>

<section class="hero-unit">
<!-- 	<img src="http://dummyimage.com/1400x603/222/fff.jpg" /> -->
<video src="<?php bloginfo('template_directory'); ?>/img/seascape-loop.mp4" preload autoplay x`x muted="muted"></video>
</section>

<section class="body-content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     		<?php the_content(); ?>
	<?php endwhile; ?>
</section>

<section class="flip-cards">
	<div class="centered">

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					<div>
						<?php echo file_get_contents(get_bloginfo('template_directory'). '/img/physicians-icon.svg'); ?>
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

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
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

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
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
		<a href="<?php the_field('callout_link'); ?>" class="btn"><?php the_field('callout_button_text'); ?></a>
	</div>
</section>

<section class="case-study">
	<div class="centered">
		<div class="left-col">
			<?php the_field('case_study_text'); ?><br />
			<a href="<?php the_field('case_study_link'); ?>" class="btn">View Case Study</a>
		</div>
		<div class="right-col">
			<?php the_field('case_study_video'); ?>
		</div>
	</div>
</section>

<section class="news-feed">
	<div class="centered">
		<h3>What are people saying?</h3>
		<ul class="feed-list">
			<li><span class="date">January 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh.</li>
			<li><span class="date">May 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh.</li>
			<li><span class="date">November 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh.</li>
		</ul>
		<a href="<?php echo get_permalink(41); ?>" class="btn">More News</a>
	</div>
</section>

<section class="event-feed">
	<?php the_field('events_content'); ?>
	<h4>Upcoming Events</h4>
	<ul class="feed-lsit">
		<li><span class="date">January 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh.</li>
			<li><span class="date">May 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat nibh.</li>
			<li><span class="date">November 14, 2013</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh.</li>
	</ul>
</section>

<section class="contact-callout">
	<div class="centered">
		<?php the_field('contact_content'); ?>
		<br />
		<a href="<?php echo get_permalink(47); ?>" class="btn">Contact</a>
	</div>
</section>

<?php get_footer(); ?>