<?php get_header(); ?>

<section class="hero-unit">
	<img src="http://dummyimage.com/1400x603/222/fff.jpg" />
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
					front 1
				</div>
				<div class="back">
					back
				</div>
			</div>
		</div>

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					front 2
				</div>
				<div class="back">
					back
				</div>
			</div>
		</div>

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					front 3
				</div>
				<div class="back">
					back
				</div>
			</div>
		</div>


	</div>
</section>


<section class="callout red">
	<div class="centered">
		<p>d-Nav helps patients reach their target HbA1c.<br />
		We have the clinical evidence to prove it.</p>
		<a href="#" class="btn">See It Now</a>
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
		<a href="#" class="btn">More News</a>
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
		<h3>Let's change the world, together.</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
		<br />
		<a href="#" class="btn">Contact</a>
	</div>
</section>

<?php get_footer(); ?>