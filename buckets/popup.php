<?php if (get_sub_field('type') == 'Image'): ?>
    <a href="<?php $image = wp_get_attachment_image_src(get_sub_field('image'),'full'); echo $image[0]; ?>" class="bucket magnific-img"><img src="<?php $image = wp_get_attachment_image_src(get_sub_field('image'),'featured-thumb'); echo $image[0]; ?>" /></a>
<?php elseif (get_sub_field('type') == 'Video'): ?>
    <a href="<?php the_sub_field('youtube_url'); ?>" class="bucket magnific-video"><img src="<?php $image = wp_get_attachment_image_src(get_sub_field('thumbnail'),'featured-thumb'); echo $image[0]; ?>" /></a>
<?php endif; ?>