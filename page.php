<?php get_header(); ?>

<div id="sidebar" class="left">
    <nav>
        <?php
            global $parents;

            $parent = ($post->post_parent == 0 || $post->post_parent == 7 || $post->post_parent == 5) ? $post->ID : $post->post_parent;
            $children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0");
        ?>

        <ul>
            <li><a href="<?php get_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a>
                <?php if ($children): ?><ul><?php echo $children; ?></ul><?php endif; ?>
            </li>
        </ul>
    </nav>
    <?php if (get_field('sidebar')): ?>
        <?php the_field('sidebar'); ?>
    <?php endif; ?>
</div>


<div id="content" class="right">

    <div id="breadcrumbs">
        <?php if(function_exists('bcn_display')){bcn_display();}?>
    </div>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; ?>

</div>

<?php get_footer(); ?>