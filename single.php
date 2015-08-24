<?php get_header(); ?>

<div id="breadcrumbs" class="centered breadcrumbs">
    <?php if(function_exists('bcn_display')){ bcn_display(); }?>
</div>

<div id="blogroll" class="center-content body-text">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="post-wrap">
            <div class="blog-header">
            <h1><strong><?php if (get_field('page_title')) { echo get_field('page_title'); } else { the_title(); } ?></strong></h1>
            <?php if (get_field('page_sub_title')): ?><h2><?php echo get_field('page_sub_title'); ?></h2><?php endif; ?>
                <div class="entry-meta"><span><?php the_author(); ?></span> <span><?php the_date(); ?></span> <span><?php the_category(' '); ?></span></div><!-- .entry-meta -->
            </div>
            <div class="text"><?php the_content(); ?></div>
        </div>

    <?php $tags = get_the_tags(); endwhile; ?>
    <div id="blog-pager" class="center-content"><?php posts_nav_link(' ', 'Newer', 'Older'); ?></div>
</div>


<?php if (get_field('gallery')): ?>
<div id="gallery-wrap" class="centered cf">
    <div id="gallery">
        <div class="ftg-items">          
            <?php while(has_sub_field('gallery')):?>
                <article class="tile">
                <?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), "gallery-grid-thumb"); 
                    $image = wp_get_attachment_image_src(get_sub_field('image'), "full"); ?>
                    <a class="tile-inner magnific-img" href="<?php echo $image[0]; ?>">
                        <img class="item" src="<?php echo $thumb[0]; ?>" />
                        <!-- <div class="caption">
                        caption
                        </div> -->
                    </a>
                </article>
            <?php endwhile; ?>                 
        </div>
    </div>
</div>
<?php endif; ?>


<div class="centered testimonial">
    <blockquote>
        &ldquo;<?php the_field('testimonial_text'); ?>&rdquo;
    </blockquote>
    <span>&mdash; <?php the_field('testimonial_author'); ?></span>
</div>


<div class="tags center-content body-text cf">
    <div class="share"><?php echo do_shortcode('[ssba]'); ?></div>
    <div class="entry-meta">Tags: <?php $c = 0; foreach($tags as $tag){ if ($c > 0) { echo ', '; $c++; } echo $tag->name; } ?></div>
    <div class="entry-meta related"><span>Related: </span><?php echo do_shortcode('[relatedPosts]'); ?></div>
</div>

    <div id="blog-pager" class="center-content"><?php previous_post('%', 'Older', 'no'); ?>    <?php next_post('%','Newer','no'); ?></div>


<?php get_footer(); ?>