<?php get_header(); ?>

<div id="page-content" class="body-text">

    <aside id="sidebar" class="<?php if (is_page(47)): echo 'contact-info '; else: the_field('sidebar_background'); endif; ?>">
	<?php if (is_page(47)): ?>
		<div class="contact">
			<p><strong>US:</strong> <br />6276 Jackson Road, STE. G <br /> Ann Arbor, MIchigan 48103 <br /> +1 734 369 9980</p>
			<br />
			<p><strong>UK:</strong> <br />Colvin House 20, Carrowreagh Road <br /> Dundonald BT16 1QT <br /> +44 (0)2890 481762</p>
		</div>
	<?php endif; ?>
    </aside>

    <section class="content-page">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?>
    </section>

</div>

<?php get_footer(); ?>