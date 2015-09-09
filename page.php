<?php get_header(); ?>

<div id="page-content" class="body-text">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; ?>

</div>

<?php if (get_field('management_team') || get_field('board_of_dirdectors') || get_field('clinical_advisors')): ?>

    <ul id="leadership-grid" class="leadership-grid">

        <?php if (get_field('management_team')): ?>
            <?php $c=1; while(has_sub_field('management_team')): ?>
                <?php $img = get_sub_field('image'); ?>
                <li class="management">
                    <a href="#" data-img="<?php echo $img['sizes']['leadership-full']; ?>" data-name="<?php the_sub_field('name'); ?>" data-title="<?php the_sub_field('title'); ?>" data-description="<?php the_sub_field('summary'); ?>">
                        <?php if ($c==1): ?><span class="section-title">Management Team</span><?php  $c++; endif; ?>
                        <img src="<?php echo $img['sizes']['leadership-thumb']; ?>" class="leadership-thumb"  />
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('title'); ?></h4>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (get_field('board_of_directors')): ?>
            <?php $c=1; while(has_sub_field('board_of_directors')): ?>
                <?php $img = get_sub_field('image'); ?>
                <li class="board">
                    <a href="#" data-img="<?php echo $img['sizes']['leadership-full']; ?>" data-name="<?php the_sub_field('name'); ?>" data-title="<?php the_sub_field('title'); ?>" data-description="<?php the_sub_field('summary'); ?>">
                        <?php if ($c==1): ?><span class="section-title">Board of Directors</span><?php  $c++; endif; ?>
                        <img src="<?php echo $img['sizes']['leadership-thumb']; ?>" class="leadership-thumb" />
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('title'); ?></h4>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (get_field('board_observers')): ?>
            <?php $c=1; while(has_sub_field('board_observers')): ?>
                <?php $img = get_sub_field('image'); ?>
                <li class="board-o">
                    <a href="#" data-img="<?php echo $img['sizes']['leadership-full']; ?>" data-name="<?php the_sub_field('name'); ?>" data-title="<?php the_sub_field('title'); ?>" data-description="<?php the_sub_field('summary'); ?>">
                        <?php if ($c==1): ?><span class="section-title">Board Observers</span><?php  $c++; endif; ?>
                        <img src="<?php echo $img['sizes']['leadership-thumb']; ?>" class="leadership-thumb" />
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('title'); ?></h4>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (get_field('clinical_advisors')): ?>
            <?php $c=1; while(has_sub_field('clinical_advisors')): ?>
                <?php $img = get_sub_field('image'); ?>
                <li class="clinical">
                    <a href="#" data-img="<?php echo $img['sizes']['leadership-full']; ?>" data-name="<?php the_sub_field('name'); ?>" data-title="<?php the_sub_field('title'); ?>" data-description="<?php the_sub_field('summary'); ?>">
                        <?php if ($c==1): ?><span class="section-title">Clinical Advisors</span><?php  $c++; endif; ?>
                        <img src="<?php echo $img['sizes']['leadership-thumb']; ?>" class="leadership-thumb"  />
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h4><?php the_sub_field('title'); ?></h4>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>

    </ul>

<?php endif; ?>

<?php get_footer(); ?>