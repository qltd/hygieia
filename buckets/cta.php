<div class="bucket cta-container">
  <?php if (get_sub_field('link')) : ?>
    <a href="<?php echo get_sub_field('link'); ?>">
  <?php endif; ?>

  <?php if (get_sub_field('title')) : ?>
    <div class="cta-title"><?php echo get_sub_field('title'); ?></div>
  <?php endif; ?>

  <?php if (get_sub_field('subtitle')) : ?>
    <div class="cta-subtitle"><?php echo get_sub_field('subtitle'); ?></div>
  <?php endif; ?>

  <?php if (get_sub_field('image')) : ?>
    <div class="cta-image"><?php echo wp_get_attachment_image(get_sub_field('image'), 'full', null); ?></div>
  <?php endif; ?>

  <?php if (get_sub_field('button_text')) : ?>
    <div class="cta-button"><span><?php echo get_sub_field('button_text'); ?></span></div>
  <?php endif; ?>

  <?php if (get_sub_field('link')) : ?>
    </a>
  <?php endif; ?>
</div>