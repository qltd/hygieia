<?php get_header(); ?>

<section class="hero-unit">
	<img src="http://lorempixel.com/output/nature-q-c-1081-603-4.jpg" />
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
					front
				</div>
				<div class="back">
					back
				</div>
			</div>
		</div>

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					front
				</div>
				<div class="back">
					back
				</div>
			</div>
		</div>

		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
			<div class="flipper">
				<div class="front">
					front
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
			What Success Looks Like
		</div>
		<div class="right-col">
			// YouTube Video
		</div>
	</div>
</section>

<section class="news-feed">
	<h3>What are people saying?</h3>
	<ul class="feed-list">
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
	</ul>
	<a href="#" class="btn">More News</a>
</section>

<section class="event-feed">
	<h2>See d-Nav In Action</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
	<h4>Upcoming Events</h4>
	<ul class="feed-lsit">
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
		<li><span class="date">January 14, 2013</span> Lorem Ipsum</li>
	</ul>
</section>

<section class="contact-callout">
	<h3>Let's change the world, together.</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed velit neque, sed placerat nibh. Duis eu lorem eu leo vulputate pellentesque. Aenean ut nibh tortor. Phasellus id velit a nisl suscipit tempor. Quisque a aliquam neque. Pellentesque viverra, sem sed porta gravida, enim nunc congue urna, nec lacinia nisl diam eget lectus. </p>
	<a href="#" class="btn">Contact</a>
</section>

<?php get_footer(); ?>