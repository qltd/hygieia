<?php if (get_sub_field('type') == 'Internal Page'){
        $url = get_sub_field('page');
    } elseif (get_sub_field('type') == 'External Page'){
        $url = get_sub_field('url');
        $open = 'target="_blank"';
    } elseif (get_sub_field('type') == 'Manual Internal Page'){
        $url = get_sub_field('url');
    }  elseif (get_sub_field('type') == 'File'){
        $url = get_sub_field('file');
        $open = 'target="_blank"';
    } ?>
<a href="<?php echo $url; ?>" class="bucket btn" <?php echo $open; ?>><?php the_sub_field('text'); ?> <i class="fa fa-caret-right"></i></a>
